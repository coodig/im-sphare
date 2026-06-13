<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index($username)
    {

        $user = User::where('username', $username)->firstOrFail();
        return view('gallery.index', compact('user'));
    }
    public function show($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('gallery.show', compact('user'));
    }

    public function edit($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        return view('gallery.edit', compact('user'));
    }

    public function upload_image(){

    }
}
