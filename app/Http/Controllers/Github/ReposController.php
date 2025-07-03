<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class ReposController extends Controller
{
    public function showform(){
        return view('github.github_token');
    }
    public function fetchRepos(Request $request)
    {
        // $token = config('services.github.token');

        $request-> validate([
            'token'=>'required',
        ]);

        session(['github_token' => $request->token]); // ✅ Token stored in session

        // $response = Http::withToken($token)
        //                 ->get('https://api.github.com/user/repos?per_page=100');

        $token = $request->input('token');
        $response = Http::withToken($token)->get('https://api.github.com/user/repos');

        if ($response->successful()) {
            $repos = $response->json();

            // dd($response);
            // dd($repos);

            return view('github.repos.index', compact('repos'));
        }

        return back()->with('error', 'Failed to fetch repositories');
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
