{{-- @extends('layouts.app')

@section('content')

    <div class="profile_detail_container">

        <div class="user_profile_section">
            <h2 class="page-name">Profile</h2>
            <div class="profile-media">
                <div class="profile-banner">

                    <form action="{{route('profile-banner', ['username' => Auth::user()->username])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile-banner" id="profile-banner" accept="image/*" hidden>
                        <label for="profile-banner" style="cursor: pointer;">
                            <img src="{{asset('asset/img/profile-banner.jpeg')}}" alt="profile-banner">
                        </label>
                    </form>

                </div>

                <div class="profile-image">

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile-img" id="profile-img" accept="image/*" hidden>

                        <label for="profile-img" style="cursor: pointer; object-fit: cover;">
                            <img src="{{ asset('asset/img/about.jpg') }}" alt="Profile Image">
                        </label>
                    </form>

                </div>
            </div>

            <div class="name" id="name">
                <p>{{ ucwords(optional(Auth::user()->profile)->name) ?? '' }}</p>

            </div>
            <div class="username" id="username">
                <p>{{"@ " . Auth::user()->username ?? ''}}</p>
            </div>


            <div class="profile-stats">
                <div class="stat-item" id="projects">
                    <a href="{{route('repos.index', ['username' => Auth::user()->username])}}">
                        <span class="stat-count">{{Auth::user()->repos()->count()}}</span>
                        <span class="stat-label">Projects</span>
                    </a>
                </div>
                <div class="stat-item" id="followers">
                    <a href="{{route('followers', ['username' => Auth::user()->username])}}">
                        <span class="stat-count">{{Auth::user()->followers()->count()}}</span>
                        <span class="stat-label">Followers</span>
                    </a>
                </div>
            </div>

            <p class="email"></iconify-icon>&nbsp;{{
                Auth::user()->email}}
            </p>

            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->bio) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->gender) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->location) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->dob) ?? ''}}</p>
            </div>

            <div class="profile-actions">
                <a class="btn-edit" id="edit-profile" href={{route('profile.edit', ['username' => Auth::user()->username])}}><button>

                    Edit profile
                </button></a>
            </div>

        </div>
    </div>
    @endsection --}}

    {{-- <div class="preview-image" id="preview-image" style="height: 300px;wi
400px; "></div> --}}


@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto mb-12 animate-fade">

    <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple overflow-hidden relative group">

        <div class="h-48 md:h-64 w-full bg-gray-200 dark:bg-gray-800 relative group/banner">
            <form action="{{route('profile-banner', ['username' => Auth::user()->username])}}" method="POST" enctype="multipart/form-data" class="h-full w-full">
                @csrf
                <input type="file" name="profile-banner" id="profile-banner" accept="image/*" hidden onchange="this.form.submit()">

                <label for="profile-banner" class="cursor-pointer block h-full w-full relative">
                    <img src="{{ Auth::user()->profile->banner_url ?? asset('asset/img/profile-banner.jpeg') }}"
                         alt="Cover"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover/banner:scale-105">

                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover/banner:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <span class="px-4 py-2 bg-black/50 backdrop-blur-md rounded-full text-white text-sm font-bold flex items-center gap-2 border border-white/20">
                            <iconify-icon icon="solar:camera-add-bold-duotone"></iconify-icon> Change Cover
                        </span>
                    </div>
                </label>
            </form>
        </div>

        <div class="px-6 md:px-10 pb-10 relative">

            <div class="flex flex-col md:flex-row justify-between items-end -mt-16 mb-6">

                <div class="relative group/avatar">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile-img" id="profile-img" accept="image/*" hidden onchange="this.form.submit()">

                        <label for="profile-img" class="cursor-pointer block relative">
                            <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-[6px] border-card bg-body overflow-hidden shadow-2xl relative">
                                <img src="{{ Auth::user()->profile->avatar_url ?? asset('asset/img/about.jpg') }}"
                                     alt="Avatar"
                                     class="w-full h-full object-cover">

                                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover/avatar:opacity-100 flex items-center justify-center transition-opacity duration-300">
                                    <iconify-icon icon="solar:camera-add-bold" class="text-white text-3xl"></iconify-icon>
                                </div>
                            </div>
                        </label>
                    </form>
                </div>

                <div class="mt-4 md:mt-0 flex gap-3">
                    <a href="{{ route('profile.edit', ['username' => Auth::user()->username]) }}"
                       class="px-6 py-2.5 rounded-full bg-body border border-custom text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all shadow-sm flex items-center gap-2">
                        <iconify-icon icon="solar:pen-new-square-bold-duotone" class="text-lg"></iconify-icon> Edit Profile
                    </a>
                </div>
            </div>

            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-2 mb-1">
                    {{ ucwords(optional(Auth::user()->profile)->name ?? Auth::user()->username) }}
                    @if(optional(Auth::user()->profile)->verified)
                        <iconify-icon icon="solar:verified-check-bold" class="text-blue-500 text-2xl"></iconify-icon>
                    @endif
                </h1>
                <p class="text-muted text-lg font-medium">@ {{ Auth::user()->username }}</p>

                @if(optional(Auth::user()->profile)->bio)
                    <p class="mt-4 text-text-main max-w-3xl leading-relaxed text-lg opacity-90">
                        {{ ucfirst(Auth::user()->profile->bio) }}
                    </p>
                @else
                    <p class="mt-4 text-muted italic">No bio added yet.</p>
                @endif
            </div>

            <div class="h-px w-full bg-custom mb-8"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">

                <div class="space-y-4">
                    <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-2">About</h3>

                    <div class="flex items-center gap-3 text-text-main group">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-500 flex items-center justify-center">
                            <iconify-icon icon="solar:letter-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <span class="font-medium">{{ Auth::user()->email }}</span>
                    </div>

                    @if(optional(Auth::user()->profile)->location)
                    <div class="flex items-center gap-3 text-text-main group">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-900/20 text-orange-500 flex items-center justify-center">
                            <iconify-icon icon="solar:map-point-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <span class="font-medium">{{ ucfirst(Auth::user()->profile->location) }}</span>
                    </div>
                    @endif

                    @if(optional(Auth::user()->profile)->dob)
                    <div class="flex items-center gap-3 text-text-main group">
                         <div class="w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-900/20 text-purple-500 flex items-center justify-center">
                            <iconify-icon icon="solar:cake-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <span class="font-medium">{{ \Carbon\Carbon::parse(Auth::user()->profile->dob)->format('d M, Y') }}</span>
                    </div>
                    @endif

                    @if(optional(Auth::user()->profile)->gender)
                    <div class="flex items-center gap-3 text-text-main group">
                         <div class="w-10 h-10 rounded-xl bg-pink-50 dark:bg-pink-900/20 text-pink-500 flex items-center justify-center">
                            <iconify-icon icon="solar:user-bold-duotone" class="text-xl"></iconify-icon>
                        </div>
                        <span class="font-medium">{{ ucfirst(Auth::user()->profile->gender) }}</span>
                    </div>
                    @endif
                </div>

                <div>
                     <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-4">Stats</h3>
                     <div class="grid grid-cols-2 gap-4">
                        <a href="{{route('repos.index', ['username' => Auth::user()->username])}}" class="p-4 rounded-2xl border border-custom bg-body hover:border-primary transition-colors group">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-2 rounded-full bg-green-100 dark:bg-green-900/30 text-green-600">
                                    <iconify-icon icon="solar:folder-with-files-bold-duotone"></iconify-icon>
                                </div>
                                <span class="text-sm font-bold text-muted group-hover:text-primary transition-colors">Projects</span>
                            </div>
                            <span class="text-3xl font-bold text-text-main">{{ Auth::user()->repos()->count() }}</span>
                        </a>

                        <a href="{{route('followers', ['username' => Auth::user()->username])}}" class="p-4 rounded-2xl border border-custom bg-body hover:border-primary transition-colors group">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-2 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600">
                                    <iconify-icon icon="solar:users-group-rounded-bold-duotone"></iconify-icon>
                                </div>
                                <span class="text-sm font-bold text-muted group-hover:text-primary transition-colors">Followers</span>
                            </div>
                            <span class="text-3xl font-bold text-text-main">{{ Auth::user()->followers()->count() }}</span>
                        </a>
                     </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
