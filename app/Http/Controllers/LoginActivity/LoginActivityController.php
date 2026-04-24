<?php

namespace App\Http\Controllers\LoginActivity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginActivityController extends Controller
{
    public function index($username){

        return view('login-activities.index');
    }

    public function show($username){

    return view('login-activities.show');
    }
}
