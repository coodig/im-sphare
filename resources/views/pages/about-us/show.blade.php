@extends('layouts.app')

@section('content')

<div class="relative py-16 md:py-24 overflow-hidden text-center">
    <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] -z-10 opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <span class="inline-block py-1.5 px-4 rounded-full bg-body border border-custom text-xs font-bold text-primary mb-6 tracking-wide uppercase shadow-sm">
            Our Mission
        </span>
        <h1 class="text-4xl md:text-6xl font-black text-text-main mb-6 tracking-tight leading-tight">
            Empowering your <br>
            <span class="text-primary">Professional Journey.</span>
        </h1>
        <p class="text-lg md:text-xl text-muted mb-10 max-w-2xl mx-auto leading-relaxed">
            IMSPhare is more than just a portfolio builder. It's a platform designed to help you tell your story, showcase your work, and connect with opportunities.
        </p>
    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">

        <div class="w-full md:w-1/2 relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-primary/20 to-purple-500/20 rounded-[2.5rem] blur-2xl -z-10 opacity-60"></div>
            <div class="bg-card border border-custom rounded-[2rem] p-8 shadow-apple transform hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('asset/img/about_us2.svg')}}" alt="About IMSPhare" class="w-full h-auto drop-shadow-lg">
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-bold text-text-main mb-6">Built for Creators, <br>by Creators.</h2>
            <div class="space-y-6 text-muted text-lg leading-relaxed">
                <p>
                    Welcome to <strong class="text-text-main">IMSPhare</strong>. We built this platform with a simple belief:
                    <span class="italic text-text-main">"Talent is universal, but opportunity is not."</span>
                </p>
                <p>
                    Whether you're a developer pushing code, a designer crafting pixels, or a writer weaving stories, you need a place that highlights your work without the hassle of building a website from scratch.
                </p>
                <p>
                    Our goal is to give you complete creative control—automating the boring stuff (like SEO and hosting) so you can focus on what you do best: <strong>Creating.</strong>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-text-main">Why Choose IMSPhare?</h2>
        <p class="text-muted mt-2">Core values that drive our platform.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-2 hover:shadow-lg group">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:presentation-graph-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Showcase Skills</h3>
            <p class="text-sm text-muted leading-relaxed">
                Display your experiences, projects, and achievements in a visually stunning layout.
            </p>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-2 hover:shadow-lg group">
            <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">For Everyone</h3>
            <p class="text-sm text-muted leading-relaxed">
                Empowering developers, designers, writers, and students regardless of technical background.
            </p>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-2 hover:shadow-lg group">
            <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:magic-stick-3-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Intuitive Design</h3>
            <p class="text-sm text-muted leading-relaxed">
                Simple interface with powerful tools giving you complete creative freedom.
            </p>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-2 hover:shadow-lg group">
            <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center text-orange-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:chart-square-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Career Growth</h3>
            <p class="text-sm text-muted leading-relaxed">
                Built for both personal branding and professional growth to help you land your next role.
            </p>
        </div>

    </div>
</div>

<div class="container mx-auto px-6 mb-20">
    <div class="bg-primary rounded-[2.5rem] p-10 md:p-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to start your journey?</h2>
            <p class="text-white/80 text-lg mb-8 max-w-xl mx-auto">
                Join thousands of creators who are building their future with IMSPhare today.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                @guest
                    <a href="{{ route('signup.show') }}" class="px-8 py-3.5 rounded-full bg-white text-primary font-bold shadow-lg hover:bg-gray-50 transition-transform hover:scale-105 active:scale-95">
                        Create Portfolio
                    </a>
                @endguest
                @auth
                    <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}" class="px-8 py-3.5 rounded-full bg-white text-primary font-bold shadow-lg hover:bg-gray-50 transition-transform hover:scale-105 active:scale-95">
                        Go to Dashboard
                    </a>
                @endauth
                <a href="{{ route('contact-us.show') }}" class="px-8 py-3.5 rounded-full border-2 border-white text-white font-bold hover:bg-white/10 transition-colors">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
