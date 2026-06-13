<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
{
    public function index()
    {
        $username = Auth::user();

        $testing_data = Testing::all();
        return view('testing.index', compact('username', 'testing_data'));
    }
    public function show()
    {
        $username = Auth::user();
        return view('testing.show', compact('username'));
    }

    public function store(Request $request)
    {

        $request->validate([

            'testing_name' => 'required|string',
        ]);

        Testing::create([
            'user_id' => Auth::id(),
            'test_name' => $request->testing_name,
        ]);
        // dd($testing_store);
        return redirect()->route('testing.index')->with('success', 'data enter successfully');
    }


    public function  edit(Testing  $testing)
    {
        $user = Auth::user();

        dd($user,$testing);

        // return view('testing.edit',compact('user','testing'));
    }

    public function update(Request $request,Testing $testing) {
        // $username ->Auth::user();

        $request->validate([

            'testing_name'=>'required|string'
        ]

        );

        $testing=Testing::update([
            // 'user_id'=>Auth::id(),
            'test_name'=>$request->testing_name,
        ]);

        dd($testing);

        return redirect()->route('testing.index');
    }

    public function massImageUpload(){


    }

}
