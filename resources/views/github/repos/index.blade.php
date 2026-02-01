{{-- <div class="card-img"> --}}
    {{-- @if ($repo->repo_id->isNotEmpty()) --}}

    {{-- <img src="{{asset('asset/img/about.jpg')}}" alt=""> --}}
    {{-- <img src="{{ $repo->readme_image->first()->img_url}}" alt=""> --}}
    {{-- @endif --}}
    {{-- </div> --}}
{{-- @extends('layouts.app')

@section('content')
    <div class="dashboard-container">

         <div class="page-name"><h2>Your Projects</h2></div>


        <div id="repoContainer">
            @foreach($savedRepos as $repo)
                <div class="card">

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
@endsection --}}

{{--
@extends('layouts.app')

@section('content')

    <div class="flex flex-col md:flex-row justify-between items-end md:items-center gap-4 mb-10 animate-fade">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">
                Portfolio
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main">Your Projects</h1>
            <p class="text-muted mt-2">Manage and showcase your GitHub repositories.</p>
        </div>

        <div class="px-5 py-2 rounded-full bg-card border border-custom shadow-sm text-sm font-bold text-text-main flex items-center gap-2">
            <iconify-icon icon="solar:folder-with-files-bold-duotone" class="text-primary text-lg"></iconify-icon>
            <span>{{ $savedRepos->total() }} Projects</span>
        </div>
    </div>

    @if($savedRepos->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @foreach($savedRepos as $repo)
                <div class="group relative bg-card rounded-[2rem] border border-custom p-6 hover:shadow-apple-hover hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">

                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300 text-text-main">
                            <iconify-icon icon="solar:code-file-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>

                        <span class="px-3 py-1 rounded-full bg-gray-100 dark:bg-white/5 text-xs font-bold text-muted border border-custom">
                            Public
                        </span>
                    </div>

                    <div class="mb-6 flex-1">
                        <h3 class="text-xl font-bold text-text-main mb-2 line-clamp-1 group-hover:text-primary transition-colors">
                            {{ ucwords(preg_replace('/[-._]/', ' ', $repo->name)) }}
                        </h3>
                        <p class="text-sm text-muted line-clamp-3 leading-relaxed">
                            @if(!empty($repo->description))
                                {{ ucfirst($repo->description) }}
                            @else
                                <span class="italic opacity-50">No description provided.</span>
                            @endif
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 py-4 border-t border-custom mb-4">
                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-muted font-bold mb-1">Created</p>
                            <div class="flex items-center gap-1.5 text-xs font-medium text-text-main">
                                <iconify-icon icon="solar:calendar-add-linear"></iconify-icon>
                                {{ \Carbon\Carbon::parse($repo['created_at'])->format('d M, Y') }}
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-muted font-bold mb-1">Last Update</p>
                            <div class="flex items-center gap-1.5 text-xs font-medium text-text-main">
                                <iconify-icon icon="solar:history-linear"></iconify-icon>
                                {{ \Carbon\Carbon::parse($repo['pushed_at'])->diffForHumans(null, true) }} ago
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('repo.show', ['username' => Auth::user()->username, 'owner' => $repo->owner, 'repo' => $repo->name]) }}"
                       class="w-full py-3 rounded-xl bg-body border border-custom text-text-main font-bold text-sm flex items-center justify-center gap-2 group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all duration-300">
                        View Details
                        <iconify-icon icon="solar:arrow-right-linear" class="text-lg group-hover:translate-x-1 transition-transform"></iconify-icon>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-8 flex justify-center">
            {{ $savedRepos->links('pagination::tailwind') }}
        </div>

    @else
        <div class="flex flex-col items-center justify-center py-20 bg-card rounded-[2rem] border border-custom shadow-sm text-center">
            <div class="w-24 h-24 bg-body rounded-full flex items-center justify-center mb-6 animate-pulse">
                <iconify-icon icon="solar:box-minimalistic-bold-duotone" class="text-4xl text-muted"></iconify-icon>
            </div>
            <h2 class="text-2xl font-bold text-text-main mb-2">No Projects Found</h2>
            <p class="text-muted max-w-md mb-8">It looks like you haven't synced any repositories yet.</p>
            <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}" class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:shadow-primary/30 hover:-translate-y-1 transition-all">
                Go to Dashboard
            </a>
        </div>
    @endif

@endsection --}}


@extends('layouts.app')

@section('content')

    <div class="flex flex-col md:flex-row justify-between items-end md:items-center gap-4 mb-10 animate-fade">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">
                Portfolio
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main">Your Projects</h1>
            <p class="text-muted mt-2">Manage and showcase your GitHub repositories.</p>
        </div>

        <div class="px-5 py-2 rounded-full bg-card border border-custom shadow-sm text-sm font-bold text-text-main flex items-center gap-2">
            <iconify-icon icon="solar:folder-with-files-bold-duotone" class="text-primary text-lg"></iconify-icon>
            <span>
                {{ method_exists($savedRepos, 'total') ? $savedRepos->total() : $savedRepos->count() }} Projects
            </span>
        </div>
    </div>

    @if($savedRepos->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @foreach($savedRepos as $repo)
                <div class="group relative bg-card rounded-[2rem] border border-custom p-6 hover:shadow-apple-hover hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">

                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300 text-text-main">
                            <iconify-icon icon="solar:code-file-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>

                        <span class="px-3 py-1 rounded-full bg-gray-100 dark:bg-white/5 text-xs font-bold text-muted border border-custom">
                            {{ isset($repo->private) && $repo->private ? 'Private' : 'Public' }}
                        </span>
                    </div>

                    <div class="mb-6 flex-1">
                        <h3 class="text-xl font-bold text-text-main mb-2 line-clamp-1 group-hover:text-primary transition-colors">
                            {{ ucwords(preg_replace('/[-._]/', ' ', $repo->name)) }}
                        </h3>
                        <p class="text-sm text-muted line-clamp-3 leading-relaxed">
                            @if(!empty($repo->description))
                                {{ ucfirst($repo->description) }}
                            @else
                                <span class="italic opacity-50">No description provided.</span>
                            @endif
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 py-4 border-t border-custom mb-4">
                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-muted font-bold mb-1">Created</p>
                            <div class="flex items-center gap-1.5 text-xs font-medium text-text-main">
                                <iconify-icon icon="solar:calendar-add-linear"></iconify-icon>
                                {{ \Carbon\Carbon::parse($repo['created_at'])->format('d M, Y') }}
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider text-muted font-bold mb-1">Last Update</p>
                            <div class="flex items-center gap-1.5 text-xs font-medium text-text-main">
                                <iconify-icon icon="solar:history-linear"></iconify-icon>
                                {{ \Carbon\Carbon::parse($repo['pushed_at'])->diffForHumans(null, true) }} ago
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('repo.show', ['username' => Auth::user()->username, 'owner' => $repo->owner, 'repo' => $repo->name]) }}"
                       class="w-full py-3 rounded-xl bg-body border border-custom text-text-main font-bold text-sm flex items-center justify-center gap-2 group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all duration-300">
                        View Details
                        <iconify-icon icon="solar:arrow-right-linear" class="text-lg group-hover:translate-x-1 transition-transform"></iconify-icon>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-10 py-6 border-t border-custom w-full">
            @if(method_exists($savedRepos, 'links'))
                {{ $savedRepos->links('pagination::tailwind') }}
            @endif
        </div>

    @else
        <div class="flex flex-col items-center justify-center py-20 bg-card rounded-[2rem] border border-custom shadow-sm text-center">
            <div class="w-24 h-24 bg-body rounded-full flex items-center justify-center mb-6 animate-pulse">
                <iconify-icon icon="solar:box-minimalistic-bold-duotone" class="text-4xl text-muted"></iconify-icon>
            </div>
            <h2 class="text-2xl font-bold text-text-main mb-2">No Projects Found</h2>
            <p class="text-muted max-w-md mb-8">It looks like you haven't synced any repositories yet.</p>
            <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}" class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:shadow-primary/30 hover:-translate-y-1 transition-all">
                Go to Dashboard
            </a>
        </div>
    @endif

@endsection
