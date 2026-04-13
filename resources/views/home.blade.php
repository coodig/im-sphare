
@extends('layouts.app')

@section('content')

    <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-8 mb-12 animate-fade">
        <div class="flex-1 text-center md:text-left">
            <div
                class="inline-block px-3 py-1 mb-4 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wide">
                Welcome Back
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-text-main mb-4 leading-tight">
                Hi, I'm <span
                    class="text-primary">{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username) }}</span>
            </h1>
            <p class="text-lg text-muted mb-8 max-w-xl">
                {{ ucfirst(Auth::user()->profile->bio) }}
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-4">
                {{-- <x-action-button url="{{ route('dashboard.show', ['username' => auth()->user()->username]) }}" type="view"
                    label="View Work"
                    class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-apple hover:shadow-apple-hover transition-all" /> --}}

                <a href="{{ route('repos.index',['username'=>auth()->user()->username]) }}"
                    class="px-8 py-3 border border-custom bg-card text-text-main rounded-full font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-all">
                    View Work
                </a>
                <a href="{{ route('contact-me.show',['username'=>Auth::user()->username]) }}"
                    class="px-8 py-3 border border-custom bg-card text-text-main rounded-full font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-all">
                    Contact Me
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/3 flex justify-center">
            <div class="relative w-64 h-64 md:w-80 md:h-80">
                <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
                <img src="{{ asset('asset/img/l_1.svg') }}" alt="Hero"
                    class="relative z-10 w-full h-full object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div
            class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="p-3 rounded-2xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <iconify-icon icon="si:projects-duotone" width="28"></iconify-icon>
                </div>
                <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg"></span>
            </div>
            <h3 class="text-muted text-sm font-medium mb-1">Total Projects</h3>
            <p class="text-3xl font-bold text-text-main">$45,200</p>
        </div>

        <div
            class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="p-3 rounded-2xl bg-purple-50 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <iconify-icon icon="solar:star-bold-duotone" width="28"></iconify-icon>
                </div>
                <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+5</span>
            </div>
            <h3 class="text-muted text-sm font-medium mb-1">Total Stars</h3>
            <p class="text-3xl font-bold text-text-main">12</p>
        </div>

        <div
            class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="p-3 rounded-2xl bg-orange-50 text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <iconify-icon icon="solar:eye-bold-duotone" width="28"></iconify-icon>
                </div>
                <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+24</span>
            </div>
            <h3 class="text-muted text-sm font-medium mb-1">Profile Views</h3>
            <p class="text-3xl font-bold text-text-main">84</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">

        <div class="bg-card p-8 rounded-[2rem] border border-custom shadow-apple">
            <h2 class="text-2xl font-bold text-text-main mb-6 flex items-center gap-2">
                <iconify-icon icon="solar:user-id-bold-duotone" class="text-primary"></iconify-icon> About Me
            </h2>
            <div class="space-y-4 text-muted leading-relaxed">
                <p>
                    Hello! I create modern digital solutions. My focus is on solving complex problems with efficient code.
                    Whether it is a web application using <strong>Laravel/React</strong> or a system-level project in
                    <strong>C++</strong>, I aim for perfection.
                </p>
                <p>
                    Currently, I am working on a challenging project—creating my own programming language using C++—to
                    demonstrate my deep understanding of compilers.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-4 rounded-2xl bg-body">
                    <p class="text-xs text-muted uppercase tracking-wider font-bold mb-1">Email</p>
                    <p class="text-text-main font-medium break-all">{{ Auth::user()->email }}</p>
                </div>
                <div class="p-4 rounded-2xl bg-body">
                    <p class="text-xs text-muted uppercase tracking-wider font-bold mb-1">Location</p>
                    <p class="text-text-main font-medium">Lucknow, India</p>
                </div>
            </div>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom shadow-apple">
            <h2 class="text-2xl font-bold text-text-main mb-6 flex items-center gap-2">
                <iconify-icon icon="solar:star-bold-duotone" class="text-primary"></iconify-icon> Expertise
            </h2>

            <div class="space-y-6">
                <div>
                    <div class="flex justify-between mb-2 text-sm font-bold text-text-main">
                        <span>HTML5 & CSS3</span>
                        <span class="text-primary">90%</span>
                    </div>
                    <div class="w-full h-3 bg-body rounded-full overflow-hidden">
                        <div class="h-full bg-primary rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2 text-sm font-bold text-text-main">
                        <span>React JS / JavaScript</span>
                        <span class="text-purple-500">75%</span>
                    </div>
                    <div class="w-full h-3 bg-body rounded-full overflow-hidden">
                        <div class="h-full bg-purple-500 rounded-full" style="width: 75%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2 text-sm font-bold text-text-main">
                        <span>PHP / Laravel</span>
                        <span class="text-red-500">85%</span>
                    </div>
                    <div class="w-full h-3 bg-body rounded-full overflow-hidden">
                        <div class="h-full bg-red-500 rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2 text-sm font-bold text-text-main">
                        <span>MySQL / Database</span>
                        <span class="text-orange-500">80%</span>
                    </div>
                    <div class="w-full h-3 bg-body rounded-full overflow-hidden">
                        <div class="h-full bg-orange-500 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 class="text-3xl font-bold text-text-main mb-8">Recent Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="bg-card rounded-[2rem] border border-custom overflow-hidden group hover:shadow-apple-hover transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors z-10"></div>
                    <img src="{{ asset('asset/img/l_1.svg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-main mb-2">E-Commerce Store</h3>
                    <p class="text-muted text-sm mb-4 line-clamp-2">A full-featured online store with cart, checkout, and
                        payment gateway integration.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
                        View Details <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </div>

            <div
                class="bg-card rounded-[2rem] border border-custom overflow-hidden group hover:shadow-apple-hover transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors z-10"></div>
                    <img src="{{ asset('asset/img/l_2.svg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-main mb-2">Task Management</h3>
                    <p class="text-muted text-sm mb-4 line-clamp-2">Project management tool for teams to collaborate and
                        track progress efficiently.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
                        View Details <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </div>

            <div
                class="bg-card rounded-[2rem] border border-custom overflow-hidden group hover:shadow-apple-hover transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors z-10"></div>
                    <img src="{{ asset('asset/img/l_3.svg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-main mb-2">Portfolio Builder</h3>
                    <p class="text-muted text-sm mb-4 line-clamp-2">SaaS application allowing users to create stunning
                        personal portfolios in minutes.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
                        View Details <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
