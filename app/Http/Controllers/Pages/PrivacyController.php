<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PrivacyController extends Controller
{
    public function show(){
        return view('pages.privacy.show');
    }

    public function updatePrivacy(Request $request){
        $request->validate([
            'privacy_level_id'=> 'required | in:private,public',
        ]);

        $profile = Profile::where('user_id',Auth::id())->firstOrFail();

        if($profile){
            $profile->privacy_level = $request -> privcy_level;
            $profile->save();

            return Response()->json([

                'status' => 'success',
                'message' => 'Privacy updated successfully',
                'privacy_level' => $profile->privacy_level_id
            ]);
        }
           return response()->json([
            'status' => 'error',
            'message' => 'Profile not found'
        ], 404);
    }
}
