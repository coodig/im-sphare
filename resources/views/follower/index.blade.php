@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-pink-50 dark:bg-pink-900/20 text-pink-600 dark:text-pink-400 text-xs font-bold uppercase tracking-wider">
                Community
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-3">
                Followers
                <span class="text-lg text-muted font-medium bg-card px-3 py-1 rounded-full border border-custom shadow-sm">
                    {{ $followers->count() }}
                </span>
            </h1>
            <p class="text-muted mt-2 text-lg">People who appreciate and follow your work.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @if ($followers->isEmpty())

            <div class="col-span-full flex flex-col items-center justify-center py-20 border-2 border-dashed border-custom rounded-[3rem]">
                <div class="w-20 h-20 bg-body rounded-full flex items-center justify-center mb-6 shadow-apple">
                    <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="text-4xl text-muted opacity-50"></iconify-icon>
                </div>
                <h3 class="text-xl font-bold text-text-main">No Followers Yet</h3>
                <p class="text-muted mt-2 text-center max-w-md">
                    Start sharing your projects to build your community. <br> They will show up here once they follow you.
                </p>
            </div>

        @else

            @foreach ($followers as $follower)
                <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all duration-300 group flex flex-col">

                    <div class="flex items-center gap-4 mb-6">
                        <div class="relative">
                            <img src="{{ asset('asset/img/about.jpg') }}" alt="{{ $follower->username }}"
                                 class="w-16 h-16 rounded-2xl object-cover border-2 border-custom group-hover:border-primary transition-colors">
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 border-2 border-card rounded-full" title="Online"></div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-text-main leading-tight mb-1">
                                {{ ucfirst($follower->username) }}
                            </h3>
                            <a href="#" class="text-sm text-muted hover:text-primary transition-colors">
                                {{ '@' . $follower->username }}
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mb-6 bg-body rounded-2xl p-4 border border-custom">
                        <div class="text-center">
                            <span class="block text-lg font-bold text-text-main">25</span>
                            <span class="text-[10px] text-muted uppercase font-bold tracking-wider">Projects</span>
                        </div>
                        <div class="text-center border-l border-custom">
                            <span class="block text-lg font-bold text-text-main">80</span>
                            <span class="text-[10px] text-muted uppercase font-bold tracking-wider">Following</span>
                        </div>
                    </div>

                    <div class="mt-auto grid grid-cols-2 gap-3">

                        <form action="{{ route('tooglefollow', $follower->username) }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="w-full py-2.5 rounded-xl font-bold text-sm transition-all flex items-center justify-center gap-2 shadow-sm
                                @if(auth()->user()->following->contains($follower->id))
                                    bg-body border border-custom text-text-main hover:bg-red-50 dark:hover:bg-red-900/20 hover:text-red-500 hover:border-red-200
                                @else
                                    bg-primary text-white hover:bg-primary-hover hover:-translate-y-0.5
                                @endif
                            ">
                                @if(auth()->user()->following->contains($follower->id))
                                    <iconify-icon icon="solar:user-minus-bold"></iconify-icon> Unfollow
                                @else
                                    <iconify-icon icon="solar:user-plus-bold"></iconify-icon> Follow Back
                                @endif
                            </button>
                        </form>

                        <a href="{{ route('profile.show', ['username' => $follower->username]) }}"
                           class="w-full py-2.5 rounded-xl bg-body border border-custom text-text-main font-bold text-sm hover:bg-gray-50 dark:hover:bg-white/5 hover:border-primary transition-all flex items-center justify-center gap-2">
                            View Profile
                        </a>
                    </div>

                </div>
            @endforeach

        @endif

    </div>

</div>

@endsection
