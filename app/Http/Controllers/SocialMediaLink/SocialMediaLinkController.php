<?php

namespace App\Http\Controllers\SocialMediaLink;

use App\Http\Controllers\Controller;
use App\Models\SocialMediaLink;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialMediaLinkController extends Controller
{
    public function index()
    {
        $links = SocialMediaLink::where('user_id', Auth::id())->get();
        return response()->json($links);
    }

    public function store(Request $request)
    {
        $request->validate([
            'plateform' => 'required| max
                          : 100|string',
            'social_url' => 'required|url|mmax
                           : 100',
        ]);

        $link = SocialMediaLink::create([
            'user_id' => Auth::id(),
            'plateform' => $request->plateform,
            'social_url' => $request->social_url,
        ]);

        return response()->json([
            'messaage' => 'Social Media Link Created Successfully',
            'link' => $link,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'plateform' => 'required|string|max:100',
            'social_url' => 'string|url|max
                     : 100',
        ]);

        $link = SocialMediaLink::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $link->update([
            'plateform' => $request->plateform,
            'social_url' => $request->social_url,
        ]);

        return response()->json([
            'message' => 'Social media link updated successfully',
            'link' => $link,
        ]);
    }
    public function destroy($id)
    {
        $link = SocialMediaLink::where('id', $id)->where('user_id', Auth
            ::id())->firstOrFail();

        $link->delete();
        return response()->json([
            'message' => 'social media link deleted successfully',
        ]);
    }
}
