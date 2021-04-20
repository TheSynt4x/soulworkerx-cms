<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * User sign up
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'agree' => 'accepted',
        ]);

        $user = User::where('ACCOUNT_ID', '=', $request->username)->first();

        if ($user) {
            return back()->with('error', __('messages.username_taken'));
        }

        \DB::connection('accounts')->statement(
            'SET NOCOUNT ON; EXEC [dbo].[SP_LOGIN_FOR_WM] :account, :password, :ip, :mac, :login_sec, :channel_type, :gm_power_set, :uaid, :clear_tutorial, :login_type, :session_id, :gm_power, :error',
            [
                ':account' => $request->username,
                ':password' => $request->password,
                ':ip' => ip2long($request->ip()),
                ':mac' => '00-00-00-00-00-00',
                ':login_sec' => 1,
                ':channel_type' => 0,
                ':gm_power_set' => 0,
                ':uaid' => 1,
                ':clear_tutorial' => 0,
                ':login_type' => 0,
                ':session_id' => 1,
                ':gm_power' => 0,
                ':error' => 0,
            ]
        );

        return redirect()->route('login')->with('success', __('messages.signed_up'));
    }
}
