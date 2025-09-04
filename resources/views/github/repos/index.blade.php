@extends('layouts.app')

@section('content')
    <div class="dashboard-container">

        <h2>Your Projects</h2>

        <div id="repoContainer">
            @foreach($savedRepos as $repo)
                <div class="card">

                    {{-- <div class="card-img"> --}}
                        {{-- @if ($repo->repo_id->isNotEmpty()) --}}

                        {{-- <img src="{{asset('asset/img/about.jpg')}}" alt=""> --}}
                        {{-- <img src="{{ $repo->readme_image->first()->img_url}}" alt=""> --}}
                        {{-- @endif --}}
                        {{-- </div> --}}
                    <div class="card-title">
                        {{  ucwords(preg_replace('/[-._]/', ' ', $repo->name)) }}
                    </div>

                    <div class="card-description">
                        @if(!empty($repo->description))
                            {{ ucfirst($repo->description) }}
                        @else
                            <span class="text-danger">No description</span>
                        @endif
                    </div>


                    <div class="card-stats">

                        <div class="card-stat-item">
                            <span class="card-meta">
                                <p class="card-meta-title">Pushed at :</p>&nbsp;
                                <p class="repo-meta">
                                    {{ \Carbon\Carbon::parse($repo['pushed_at'])->diffForHumans() }}
                                </p>
                            </span>
                        </div>

                        <div class="card-stat-item">
                            <span class="card-meta">
                                <p class="card-meta-title">Created at :</p>&nbsp;
                                <p class="repo-meta">
                                    {{ \Carbon\Carbon::parse($repo['created_at'])->diffForHumans() }}
                                </p>
                            </span>
                        </div>

                    </div>


                    <div class="card-btn">
                        <a href="{{ route('repo.show', ['username' => Auth::user()->username, 'owner' => $repo->owner, 'repo' => $repo->name,]) }}"
                            class="txt-black">Visit
                            Project</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate" style="align-content: center; text-align: center; margin-top: 1rem;">
            {{ $savedRepos->links() }}
        </div>
    </div>
@endsection
