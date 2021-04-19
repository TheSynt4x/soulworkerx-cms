<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
    public function store(Request $request)
    {
        $user = User::where('ACCOUNT_ID', '=', $request->username)->first();

        if (!$user) {
            return back()->with('info', 'No user found!');
        }

        if (bin2hex($user->PASSWORD) !== sha1($request->password)) {
            return back()->with('error', 'Incorrect password. Please try again.');
        }

        $request->session()->put('user', $user->ACCOUNT_ID);

        return redirect()->route('home');
    }
}
