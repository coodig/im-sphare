@extends('layouts.app')

@section('content')
    <div class="dashboard-container">

        <h2>Your Projects</h2>

        <div id="repoContainer">
            @foreach($repos as $repo)
                <div class="card">

                    <h3><strong>{{ ucfirst($repo['name']) }}</strong></h3>

                    {{-- {!! $repo['private']
                ? '<iconify-icon icon="lets-icons:lock-duotone"></iconify-icon>'
                : 'Public'
                    !!} --}}
                    <br>

                    {{-- <a href="{{$repo['html_url']}}" target="_blank">Visit Repo</a><br> --}}
                    {{-- <a href="https://github.com/{{ $repo['owner']['login'] }}/{{
                $repo['name']
                                                    }}/archive/refs/heads/{{ $repo['default_branch'] }}.zip" download>
                        ⬇️ Download ZIP
                    </a> --}}
                    <br>
                    {{-- 🌟 Stars: {{ $repo['stargazers_count'] }}<br>
                    🍴 Forks: {{ $repo['forks_count'] }} <br>
                    👀 Watchers: {{ $repo['watchers_count'] }}<br> --}}
                    {{-- 📅 Last Push: {{ \Carbon\Carbon::parse($repo['pushed_at'])->diffForHumans() }}

                    <div class="repo-meta">📅 Created at : {{ \Carbon\Carbon::parse($repo['created_at'])->diffForHumans() }} --}}
                    {{-- </div> --}}

                    {{-- <button><a href="{{ route('repos.show')}}">details</a></button> --}}
                    <a href="{{ route('repo.show', ['owner' => $repo['owner']['login'], 'repo' => $repo['name']]) }}">Details</a>

                </div>
            @endforeach
        </div>
    </div>
@endsection



{{-- <strong>{{ ucfirst($repo['name']) }}</strong>({{ $repo['private'] ? '<iconify-icon
    icon="solar:lock-bold-duotone"></iconify-icon>' : 'Public' }})<br> --}}


{{-- <button onclick="fetchReadme('${repo.owner.login}', '${
                                                                repo.name
                                                              }', '${repo.__token}')">Show README</button> --}}
