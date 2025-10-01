<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminDashboardController extends Controller
{
    public function show(){
        $users = User::all();
        $userCount = User::count();
        return view('superadmin.dashboard.show',compact('users','userCount'));
    }
}
