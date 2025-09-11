@extends('layouts.app')

@section('content')

    <div class="repository_detail_container">

        <div class="repository_detail_header">
            <div class="repository_title">
                {{ ucwords(preg_replace('/[_.-]/', ' ', $repoDetails['name'] ?? 'Untitled Projects')) }}
            </div>
            <div class="repository_description">
                {{ ucfirst($repoDetails['description'] ?? 'No description available') }}
            </div>

        </div>

        <div class="repository_detail_section">

            <div class="div-1">

                <h2 class="card-title ">README</h2>
                @if($parsedHtml)
                    <div class="readme-box">
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.8.1/github-markdown.min.css">
                        {!! $parsedHtml !!}
                    </div>
                @else
                    <p><i>No README found.</i></p>
                @endif

            </div>

            <div class="div-2">

                <h3>Languages</h3>
                <ul class="language-list">
                    @if (empty($languages))
                        <li>Languages not available</li>
                    @else
                        @foreach($languages as $lang => $bytes)
                            <li>
                                <span class="lang-color" style="background-color:#ccc;"></span>
                                {{ $lang }}
                                <span class="percent">
                                    {{-- optional: calculate % --}}
                                    {{-- {{ round(((float)($bytes / (float)array_sum($languages)) )* 100) }}% --}}
                                    {{ round(((float) $bytes / (float) array_sum($languages)) * 100) }}%

                                </span>
                            </li>
                        @endforeach
                    @endif

                </ul>

                <hr>


                <h3>Releases</h3>
                {{-- @if(count($release) > 0)
                <p><strong>Latest:</strong> {{ $release[0]['tag_name'] ?? 'v1.0' }} <br>
                    <small>{{ \Carbon\Carbon::parse($release[0]['published_at'])->toFormattedDateString() }}</small>
                </p>
                @else
                <p>No releases yet.</p>
                @endif --}}
                @if(!empty($release) && isset($release[0]['published_at']))
                    <p>
                        <strong>Latest:</strong> {{ $release[0]['tag_name'] ?? 'v1.0' }} <br>
                        <small>{{ \Carbon\Carbon::parse($release[0]['published_at'])->toFormattedDateString() }}</small>
                    </p>
                @else
                    <p>No releases yet.</p>
                @endif

                <hr>

                <h3>GitHub Stats</h3>
                <ul class="github-stats">
                    <li>Stars: <strong>{{ $repoDetails['stargazers_count'] ?? 'No Stars' }}</strong></li>
                    <li>Forks: <strong>{{ $repoDetails['forks_count'] ?? 'No Forks'}}</strong></li>
                    <li>Watchers: <strong>{{ $repoDetails['watchers_count'] ?? 'No Watchers'}}</strong></li>
                </ul>

                <hr>

                <div class="github-important-links">
                    <h3> Important Links</h3>
                    <ul class="github-important-links-list">
                        {{-- <li><a href="{{ $savedRepos['html_url']}}" class="btn-primary">Get Source Code</a></li> --}}
                        <li><a href="{{ $repoDetails['html_url'] }}/archive/refs/heads/{{ $repoDetails['default_branch'] }}.zip"
                                class="btn-secondary">Download Zip</a></li>
                    </ul>
                </div>

            </div>
            {{-- <div class="div-2">

                <h3>Projects</h3>
                <ul class="language-list">
                    @if (empty($projects))
                        <li>Languages not available</li>
                    @else
                        @foreach($projects as $project)
                            <li>
                            </li>
                        @endforeach
                    @endif

                </ul>

                <hr>

                <h3>Releases</h3>
                @if(!empty($release) && isset($release[0]['published_at']))
                    <p>
                        <strong>Latest:</strong> {{ $release[0]['tag_name'] ?? 'v1.0' }} <br>
                        <small>{{ \Carbon\Carbon::parse($release[0]['published_at'])->toFormattedDateString() }}</small>
                    </p>
                @else
                    <p>No releases yet.</p>
                @endif

                <hr>

                <h3>GitHub Stats</h3>
                <ul class="github-stats">
                    <li>Stars: <strong>{{ $repoDetails['stargazers_count'] ?? 'No Stars' }}</strong></li>
                    <li>Forks: <strong>{{ $repoDetails['forks_count'] ?? 'No Forks'}}</strong></li>
                    <li>Watchers: <strong>{{ $repoDetails['watchers_count'] ?? 'No Watchers'}}</strong></li>
                </ul>

                <hr>

                <div class="github-important-links">
                    <h3> Important Links</h3>
                    <ul class="github-important-links-list">
                        <li><a href="{{ $repoDetails['html_url'] }}/archive/refs/heads/{{ $repoDetails['default_branch'] }}.zip"
                                class="btn-secondary">Download Zip</a></li>
                    </ul>
                </div>

            </div> --}}

            <div class="popular-projects">

                <h3>Projects</h3>

                <div class="popular-projects-list">

                    @foreach ($projects as $project)

                        <div class="card popular-projects-card">

                            <h4 class="card-title">{{$project->name}}</h4>
                            <p class="card-description">{{$project->description}}</p>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
@endsection
