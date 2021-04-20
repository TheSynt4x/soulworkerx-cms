<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * User login
     *
     * @param Request $request
     * @return void
     */
    public function authenticate(Request $request)
    {
        $user = User::where('ACCOUNT_ID', '=', $request->username)->first();

        if (!$user) {
            return back()->with('info', __('messages.no_user'));
        }

        if (bin2hex($user->PASSWORD) !== sha1($request->password)) {
            return back()->with('error', __('messages.incorrect_password'));
        }

        $request->session()->put('user', $user->ACCOUNT_ID);

        return redirect(RouteServiceProvider::HOME)->with('success', 'You have been logged in!');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect(RouteServiceProvider::HOME)->with('info', __('messages.logged_out'));
    }
}
