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
        return view('auth.login', ['error' => null]);
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return view('auth.login', ['error' => $validator->errors()->first()]);
        }

        $user = User::where('ACCOUNT_ID', '=', $request->username)->first();

        if (!$user) {
            return view('auth.login', ['error' => 'An account with that username could not be found.']);
        }

        if (bin2hex($user->PASSWORD) !== sha1($request->password)) {
            return view('auth.login', ['error' => 'Incorrect password. Please try again.']);
        }

        return redirect()->route('home');
    }
}
