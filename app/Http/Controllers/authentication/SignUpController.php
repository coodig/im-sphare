<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller
{
    public function signUp(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'username' => trim($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        try {

            Mail::to($user->email)->send(new WelcomeMail($user));
        } catch (\Exception $e) {
        }
        Auth::login($user, true);

        // dd($user);
        return redirect()->route('dashboard.show', ['username' => Auth::user()->username])->with('success', 'User registered successfully!');
    }

    public function show()
    {
        return view('authentication.signup');
    }
}
