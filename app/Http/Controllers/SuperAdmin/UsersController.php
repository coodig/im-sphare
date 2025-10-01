<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use function Laravel\Prompts\alert;
use function PHPUnit\Framework\returnSelf;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::latest('created_at')->orderBy('id')->simplePaginate(10);
        return view('superadmin.users.index', compact('users'));
    }

    public function create(){
        alert("this is create a user");
    }

    public function show($id){
        $user = User::findOrFail($id);
        return response()->json($user);
           }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'User Deleted Successfully'
        ]);
    }
}
