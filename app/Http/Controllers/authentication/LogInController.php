<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller{

public function logIn(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')->with('success', 'Logged in successfully!');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

public function show(){
         return view('authentication.login');
       }

}
