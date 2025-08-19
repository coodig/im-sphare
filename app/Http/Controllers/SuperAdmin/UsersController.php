<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function index(){

        $user = User::all();
        return view('superadmin.users.index',compact('user'));


           }
}
