<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function showResetPasswordForm($token, Request $request)
    {
        $email = $request->query('email');

        return view('authentication.resetpassform', compact('token', 'email'));
    }

    public function resetPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|exists:users,email|email',
            'password' => 'required|min:6|string|confirmed',
            'token' => 'required'
        ]);

        $reset = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$reset) {
            return back()->withErrors(['email', 'Invalid or Expired token']);
        }

        DB::table('users')->where('email', $request->email)->update([
            'password' => Hash::make($request->password),
        ]);

        DB::table('password_reset_tokens')->where('email',$request->email)->delete();

        // dd($reset);

        return redirect()->route('login.show')->with('status','Your password has been reset successfully!');
    }
}
