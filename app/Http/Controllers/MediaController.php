<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function index($username)
    {

        $user = User::where('username', $username)->firstOrFail();
        return view('gallery.index', compact('user'));
    }

    public function uploadImageForm($username)
    {

        $user = User::where('username', $username)->firstOrFail();

        return view('gallery.edit', compact('user'));
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

    public function uploadImage(Request $request)
    {
        // $user = Auth::user();

        $fileNames=[];
        // $request->validate([
        //     'user_id' => $user->id
        // ], [
        //     'collection_name' => 'nullable',
        //     'file_type' => 'nullable',
        //     'mime_type' => 'nullable',
        //     'disk' => 'nullable',
        //     'file_name' => 'nullable',
        //     'file_url' => 'nullable',
        //     'original_name' => 'nullable',
        //     'file_size' => 'nullable',
        //     'mediable_type' => 'nullable',
        //     'mediable_id' => 'nullable',
        //     'created_at' => 'nullable',
        //     'updated_at' => 'nullable'

        // ]);
        // $user = Auth::user();
        // foreach ($request->image as $image) {
        foreach ($request->file('file') as $image) {

        $imageName = $image->getClientOriginalExtension();
        $image=move(public_path().'/images/'.$imageName);

        $imageNames[]= $imageName;
            // $createMedia = Media::create($request->all());

            dd($image);
        }
        // $request->validate([]);
        // dd($createMedia);
    }

    public function delete_image() {}
}
