<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function show(){

        return view('contact.show')       ;

    }

    public function edit($username){

        $username = Auth::user()->username;
        // dd($username);

        return view('contact.edit',compact('username'));
        }

        public function update(Request $request,$username){

        }

        public function create(){


               }
}
