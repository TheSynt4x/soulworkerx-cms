<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('user.change-password');
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (bin2hex($user->PASSWORD) !== sha1($request->current_password)) {
            return back()->with('error', __('messages.incorrect_password'));
        }

        \DB::connection('accounts')->statement(
            "update [dbo].[TB_ACCOUNT] set [PASSWORD] = HASHBYTES('SHA1', CONVERT(VARCHAR(50), ?)) where [ACCOUNT_ID] = ?",
            [
                $request->new_password,
                $user->ACCOUNT_ID,
            ]
        );

        return back()->with('success', __('messages.password_changed'));
    }
}
