<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{

    public function logIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.show', ['username' => Auth::user()->username])->with(['success' => 'Logged in successfully!', 'user' => Auth::user()->username]);
        }

        return back()->withErrors([
            'email' => 'Invalid Email',
            'password' => 'Invalid Password',
        ]);
    }

    public function show()
    {
        return view('authentication.login');
    }
}
