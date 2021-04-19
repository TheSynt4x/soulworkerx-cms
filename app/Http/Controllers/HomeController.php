<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        // create account
        // \DB::connection('mssql')->statement('SET NOCOUNT ON; EXEC SP_LOGIN ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?',
        //     ['t5est', 'lolol', 13370101, '123456789012345678', 1, 1, 1337, 1, 1, 1, 0, 1]);

        // login
        // $user = User::where('ACCOUNT_ID', '=', 't5est')->first();
        // dd(bin2hex($user->PASSWORD) === sha1('lolol'));
        return view('index');
    }
}
