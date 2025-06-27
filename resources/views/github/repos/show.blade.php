{{-- @extends('layouts.app')

@section('content')
<div class="dashboard-container">

    <h2>Your GitHub Repositories</h2>

    <div id="repoContainer">
        @foreach($repos as $repo)
        <div class="card">
            <strong>{{ $repo['name'] }}</strong> ({{ $repo['private'] ? 'Private' : 'Public' }})<br>
            <a href="{{$repo['html_url']}}" target="_blank">Visit Repo</a><br>
            <a href="https://github.com/{{ $repo['owner']['login'] }}/{{
                                    $repo['name']
                }}/archive/refs/heads/{{ $repo['default_branch'] }}.zip" download>
                ⬇️ Download ZIP
            </a>

            🌟 Stars: {{ $repo['stargazers_count'] }}<br>
            🍴 Forks: {{ $repo['forks_count'] }} <br>
            👀 Watchers: {{ $repo['watchers_count'] }}<br>
            📅 Last Push: {{ \Carbon\Carbon::parse($repo['pushed_at'])->diffForHumans() }}




            card.innerHTML = `
            <div class="repo-link">
                <a href="${repo.html_url}.git" title="git clone ${repo.clone_url}" onclick="copyToClipboard('git clone ${
                                          repo.clone_url
                                        }'); return false;">
                    📋 Clone Repo
                </a>
            </div>
            <div class="repo-meta">📈 Last Push: ${new Date(
                repo.pushed_at
                ).toLocaleDateString()}</div>
            <div class="repo-meta">📅 Created: ${new Date(
                repo.created_at
                ).toLocaleDateString()}</div>
            <div class="repo-meta">🔁 Default Branch: ${repo.default_branch}</div>
            <div class="repo-meta">🏷️ License: ${repo.license?.name ?? "None"}</div>
            <div class="repo-meta">🚧 Open Issues: ${repo.open_issues_count}</div>
            <div class="repo-meta">👥 Contributors: <span id="contributors-${
                            repo.name
                          }">Loading...</span></div>
            <div class="language-bar" id="bar-${repo.name}"></div>
            <ul class="language-list" id="list-${repo.name}"></ul>
            <button onclick="copyToClipboard('git clone ${
                                    repo.clone_url
                                  }')">📁 Copy Git Clone Command</button>
            <button onclick="getLatestReleaseZip('${repo.owner.login}', '${repo.name}', '${
                                    repo.__token
                                  }')">📦 Download Release ZIP</button>

            <button onclick="fetchReadme('${repo.owner.login}', '${
                                    repo.name
                                  }', '${repo.__token}')">Show README</button>
            `;

            container.appendChild(card);
        </div>
        @endforeach
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <div class="repo-name">
            <h1>show repo page</h1>
            {{-- <strong>{{ ucfirst($repo['name']) }}</strong>
                            {!! $repo['private']
                        ? '<iconify-icon icon="lets-icons:lock-duotone"></iconify-icon>'
                        : 'Public'
                !!}
                            <br> --}}
        </div>
    </div>
@endsection
