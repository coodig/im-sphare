<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\GitHubToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class ReposController extends Controller
{

    public function fetchRepos(Request $request)
    {
        // $token = GitHubToken::where('user_id', Auth::id())->value('github_token');
        $githubTokenModel = GitHubToken::where('user_id', Auth::id())->first();

        // if (!$token) {
        //     return redirect()->route('github.github_token')->with('error', 'github token not found');
        // }
        if (!$githubTokenModel) {
            return back()->with('error', 'GitHub token not found for this user.');
        }

        $token = $githubTokenModel->github_token;
        $response = Http::withToken($token)->get('https://api.github.com/user/repos');

        if ($response->successful()) {
            $repos = $response->json();

            // dd($response);
            // dd($repos);

            // return view('github.repos.index', compact('repos'));
            return view('github.repos.index', compact('repos'));
        }


        // return view('github.repos.index', ['repos' => []])
        //     ->with('error', 'Failed to fetch repositories from GitHub.');
    }

    // public function show(){


    //     return view('github.repos.show');
    //        }

}




// public function fetchRepos(Request $request)
// {
//     $token = config('services.github.token');

//     $response = Http::withToken($token)
//                     ->get('https://api.github.com/user/repos?per_page=100');

//     if ($response->successful()) {
//         $repos = collect($response->json());

        // Manual pagination
        // $perPage = 10;
        // $currentPage = LengthAwarePaginator::resolveCurrentPage();
        // $currentItems = $repos->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // $paginatedRepos = new LengthAwarePaginator(
        //     $currentItems,
        //     $repos->count(),
        //     $perPage,
        //     $currentPage,
        //     ['path' => $request->url(), 'query' => $request->query()]
        // );

//         return view('github.repos.index', ['repos' => $paginatedRepos]);
//     }

//     return back()->with('error', 'Failed to fetch repositories');
// }

// public function show(){

//         return view('github.repos.show');
//            }

