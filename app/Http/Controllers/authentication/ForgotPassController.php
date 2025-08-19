<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use function Symfony\Component\Clock\now;

class ForgotPassController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('authentication.forgotpass');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate(['email' => 'required|exists:users,email|email']);

        $forgetPassResetToken = Str::random(64);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email,],
            [
                'token' => $forgetPassResetToken,
                'created_at' => Carbon::now()
            ]
        );

        $resetPasswordLink = url('/reset-password/'.$forgetPassResetToken.'?email='.urlencode($request->email));

        Mail::raw("Click this link to reset your password : $resetPasswordLink",function($message) use ($request){

            $message->to($request->email)->subject('Password Reset Request');
        });

        return redirect()->back()->with('status','We have emailed your password reset link');
    }
}
