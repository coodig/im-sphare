{{-- @if(count($release) > 0)
<p><strong>Latest:</strong> {{ $release[0]['tag_name'] ?? 'v1.0' }} <br>
    <small>{{ \Carbon\Carbon::parse($release[0]['published_at'])->toFormattedDateString() }}</small>
</p>
@else
<p>No releases yet.</p>
@endif --}}
{{-- optional: calculate % --}}
{{-- {{ round(((float)($bytes / (float)array_sum($languages)) )* 100) }}% --}}
{{-- <li><a href="{{ $savedRepos['html_url']}}" class="btn-primary">Get Source Code</a></li> --}}
{{-- @extends('layouts.app')

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
                        {{ round(((float) $bytes / (float) array_sum($languages)) * 100) }}%

                    </span>
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

        </div>

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
@endsection --}}

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



@extends('layouts.app')

@section('content')

    <div class="mb-8 animate-fade">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
                        class="p-2 rounded-full bg-body border border-custom text-muted hover:text-primary transition-colors">
                        <iconify-icon icon="solar:arrow-left-linear" class="text-lg"></iconify-icon>
                    </a>
                    <span class="text-xs font-bold uppercase tracking-wider text-muted">Project Details</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-3">
                    {{ ucwords(preg_replace('/[_.-]/', ' ', $repoDetails['name'] ?? 'Untitled Projects')) }}
                    @if(isset($repoDetails['private']) && $repoDetails['private'])
                        <iconify-icon icon="solar:lock-password-bold-duotone" class="text-xl text-muted"></iconify-icon>
                    @else
                        <iconify-icon icon="solar:globe-bold-duotone" class="text-xl text-green-500"></iconify-icon>
                    @endif
                </h1>
                <p class="text-lg text-muted mt-2 max-w-3xl leading-relaxed">
                    {{ ucfirst($repoDetails['description'] ?? 'No description provided for this repository.') }}
                </p>
            </div>

            <div class="flex gap-3">
                <a href="{{ $repoDetails['html_url'] }}" target="_blank"
                    class="px-5 py-2.5 rounded-full border border-custom bg-body hover:bg-gray-100 dark:hover:bg-white/5 text-text-main font-bold text-sm flex items-center gap-2 transition-all">
                    <iconify-icon icon="logos:github-icon" class="text-lg"></iconify-icon> GitHub
                </a>
                <a href="{{ $repoDetails['html_url'] }}/archive/refs/heads/{{ $repoDetails['default_branch'] }}.zip"
                    class="px-5 py-2.5 rounded-full bg-primary text-white font-bold text-sm shadow-apple hover:bg-primary-hover flex items-center gap-2 transition-all">
                    <iconify-icon icon="solar:download-bold-duotone" class="text-lg"></iconify-icon> Download
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

        <div class="lg:col-span-2">
            <div class="bg-card rounded-[2rem] border border-custom shadow-apple overflow-hidden">
                <div class="px-6 py-4 border-b border-custom bg-gray-50/50 dark:bg-white/5 flex items-center gap-2">
                    <iconify-icon icon="solar:document-text-bold-duotone" class="text-xl text-orange-500"></iconify-icon>
                    <h3 class="font-bold text-text-main">README.md</h3>
                </div>

                <div class="p-6 md:p-8 prose dark:prose-invert max-w-none">
                    @if($parsedHtml)
                        <style>
                            /* Markdown Styles Fix */
                            .markdown-body {
                                font-family: 'Lexend Deca', sans-serif !important;
                                background: transparent !important;
                                color: var(--text-color);
                            }

                            .markdown-body h1,
                            .markdown-body h2 {
                                border-bottom-color: var(--border-color);
                            }

                            .markdown-body a {
                                color: var(--primary-color);
                            }

                            .markdown-body pre {
                                background: var(--bg-color);
                                border-radius: 12px;
                            }
                        </style>
                        <div class="markdown-body readme-box">
                            {!! $parsedHtml !!}
                        </div>
                    @else
                        <div class="flex flex-col items-center justify-center py-12 text-center">
                            <iconify-icon icon="solar:document-add-bold-duotone"
                                class="text-4xl text-muted mb-3 opacity-50"></iconify-icon>
                            <p class="text-muted">No README.md found in this repository.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="space-y-6">

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                <h3 class="font-bold text-text-main mb-4 flex items-center gap-2">
                    <iconify-icon icon="solar:code-circle-bold-duotone" class="text-purple-500 text-xl"></iconify-icon>
                    Languages
                </h3>

                @if (!empty($languages))
                    <div class="flex h-3 w-full rounded-full overflow-hidden mb-4 bg-gray-100">
                        @foreach($languages as $lang => $bytes)
                            @php
                                $percent = round(($bytes / array_sum($languages)) * 100);
                                $color = match ($lang) {
                                    'PHP' => '#777BB4', 'JavaScript' => '#F1E05A', 'HTML' => '#E34C26', 'CSS' => '#563D7C', 'Vue' => '#41B883', 'Blade' => '#F05340',
                                    default => '#' . substr(md5($lang), 0, 6)
                                };
                            @endphp
                            <div style="width: {{ $percent }}%; background-color: {{ $color }}"
                                title="{{ $lang }}: {{ $percent }}%"></div>
                        @endforeach
                    </div>

                    <ul class="space-y-2">
                        @foreach($languages as $lang => $bytes)
                            @php
                                $percent = round(($bytes / array_sum($languages)) * 100);
                                $color = match ($lang) {
                                    'PHP' => '#777BB4', 'JavaScript' => '#F1E05A', 'HTML' => '#E34C26', 'CSS' => '#563D7C', 'Vue' => '#41B883', 'Blade' => '#F05340',
                                    default => '#' . substr(md5($lang), 0, 6)
                                };
                            @endphp
                            <li class="flex items-center justify-between text-sm">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full" style="background-color: {{ $color }}"></span>
                                    <span class="font-medium text-text-main">{{ $lang }}</span>
                                </div>
                                <span class="text-muted font-bold">{{ $percent }}%</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-sm text-muted italic">No language data detected.</p>
                @endif
            </div>

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                <h3 class="font-bold text-text-main mb-4 flex items-center gap-2">
                    <iconify-icon icon="solar:chart-2-bold-duotone" class="text-blue-500 text-xl"></iconify-icon>
                    Repository Stats
                </h3>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="p-3 rounded-2xl bg-body">
                        <iconify-icon icon="solar:star-bold" class="text-yellow-500 text-xl mb-1"></iconify-icon>
                        <p class="font-bold text-text-main text-lg">{{ $repoDetails['stargazers_count'] ?? 0 }}</p>
                        <p class="text-[10px] text-muted uppercase font-bold">Stars</p>
                    </div>
                    <div class="p-3 rounded-2xl bg-body">
                        <iconify-icon icon="solar:branching-paths-up-bold"
                            class="text-blue-500 text-xl mb-1"></iconify-icon>
                        <p class="font-bold text-text-main text-lg">{{ $repoDetails['forks_count'] ?? 0 }}</p>
                        <p class="text-[10px] text-muted uppercase font-bold">Forks</p>
                    </div>
                    <div class="p-3 rounded-2xl bg-body">
                        <iconify-icon icon="solar:eye-bold" class="text-green-500 text-xl mb-1"></iconify-icon>
                        <p class="font-bold text-text-main text-lg">{{ $repoDetails['watchers_count'] ?? 0 }}</p>
                        <p class="text-[10px] text-muted uppercase font-bold">Watchers</p>
                    </div>
                </div>
            </div>

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                <h3 class="font-bold text-text-main mb-4 flex items-center gap-2">
                    <iconify-icon icon="solar:rocket-2-bold-duotone" class="text-red-500 text-xl"></iconify-icon>
                    Latest Release
                </h3>
                @if(!empty($release) && isset($release[0]['published_at']))
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-xl bg-green-50 text-green-600">
                            <iconify-icon icon="solar:tag-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="font-bold text-text-main text-lg">{{ $release[0]['tag_name'] }}</p>
                            <p class="text-xs text-muted">Published
                                {{ \Carbon\Carbon::parse($release[0]['published_at'])->diffForHumans() }}</p>
                        </div>
                    </div>
                @else
                    <div class="flex items-center gap-3 opacity-60">
                        <div class="p-3 rounded-xl bg-gray-100 text-gray-500">
                            <iconify-icon icon="solar:forbidden-circle-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <p class="text-sm text-muted">No releases published yet.</p>
                    </div>
                @endif
            </div>



        </div>
    </div>

    @if($projects->count() > 0)
        <div class="mb-12 pt-8 border-t border-custom">
            <h2 class="text-2xl font-bold text-text-main mb-6">More from {{ ucwords(Auth::user()->username) }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($projects->take(3) as $project)
                    <a href="{{ route('repo.show', ['username' => Auth::user()->username, 'owner' => $project->owner, 'repo' => $project->name]) }}"
                        class="group bg-card p-5 rounded-[1.5rem] border border-custom hover:shadow-apple-hover transition-all">
                        <h4 class="font-bold text-text-main mb-1 group-hover:text-primary transition-colors truncate">
                            {{ ucfirst($project->name) }}</h4>
                        <p class="text-xs text-muted line-clamp-2">{{ ucfirst($project->description ?? 'No description.') }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

@endsection
