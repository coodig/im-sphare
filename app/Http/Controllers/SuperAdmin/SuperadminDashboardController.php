<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperadminDashboardController extends Controller
{
    public function show(){
        $users = User::all();
        $userCount = User::count();
        return view('superadmin.dashboard.show',compact('users','userCount'));
    }
}
