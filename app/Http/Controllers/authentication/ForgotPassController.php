<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassController extends Controller
{
    public function show(){
        return view('authentication.forgotpass');
    }
}
