<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

class PaymentController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $config = config()->get('paypal');

        $this->_apiContext = new ApiContext(
            new OAuthTokenCredential(
                $config['client_id'],
                $config['secret']
            )
        );

        $this->_apiContext->setConfig($config['settings']);
    }

    public function index()
    {
        return view('store');
    }

    public function payWithpaypal(Request $request)
    {
        $amountToBePaid = 100;

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item = new Item();
        $item->setName('Mobile Payment')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($amountToBePaid);

        $items = new ItemList();
        $items->setItems([$item]);

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($amountToBePaid);

        $redirects = new RedirectUrls();
        $redirects->setReturnUrl(url()->route('status'))
            ->setCancelUrl(url()->route('status'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($items)
            ->setDescription('Your transaction description');

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirects)
            ->setTransactions([$transaction]);

        try {
            $payment->create($this->_apiContext);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                return redirect('/')->with('error', 'Connection timeout');
            } else {
                return redirect('/')->put('with', 'Some error occur, sorry for inconvenient');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() === 'approval_url') {
                $redirectUrl = $link->getHref();
                break;
            }
        }

        $request->session()->put('paypal_payment_id', $payment->getId());
        if (isset($redirectUrl)) {
            return redirect()->away($redirectUrl);
        }

        return redirect('/')->with('error', 'Unknown error occurred');;
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = $request->session()->get('paypal_payment_id');

        $request->session()->forget('paypal_payment_id');

        if (empty($request->PayerID) || empty($request->token)) {
            return redirect('/')->with('error', 'Payment has failed. Please try again!');;
        }

        $payment = Payment::get($payment_id, $this->_apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);

        $result = $payment->execute($execution, $this->_apiContext);

        if ($result->getState() === 'approved') {
            dd($result);

            return redirect('/')->with('success', 'Payment success');
        }

        return redirect('/')->with('error', 'Payment failed');;
    }
}
