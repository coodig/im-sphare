{{-- @extends('layouts.app')


@push('page-styles')
<style>
    .cta-button:hover {
        background-color: #2563EB !important;
        transform: translateY(-2px);
    }
    .value-card:hover {
        border-color: #3B82F6 !important;
        transform: translateY(-5px);
    }
</style>
@endpush


@section('content')

<div class="about-page-container" style="padding: 2rem; color: #E5E7EB; font-family: sans-serif;">


    <div class="page-header" style="text-align: center; background: linear-gradient(145deg, #1F2937, #111827); padding: 3rem 2rem; border-radius: 12px; margin-bottom: 3rem; border: 1px solid #374151;">
        <h1 class="page-title" style="font-size: 2.8rem; font-weight: bold; color: #FFFFFF; margin-bottom: 0.5rem;">
            {{ ucfirst(Auth::user()->userabout->title ?? 'About Me') }}
        </h1>
        <p class="page-description" style="font-size: 1.1rem; color: #9CA3AF; max-width: 600px; margin: 0 auto;">
            {{ ucfirst(Auth::user()->userabout->description ?? 'A brief introduction to my journey, skills, and aspirations.') }}
        </p>
    </div>


    <div class="about-content" style="display: flex; flex-wrap: wrap; align-items: center; gap: 3rem; margin-bottom: 4rem;">

        <div class="about-img" style="flex: 1; min-width: 300px;">
        <img src="{{ Auth::user()->profile?->profile_image ? asset('storage/'.Auth::user()->profile->profile_image): asset('asset/img/profile.svg') }}"
                                        alt="image" style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); border: 3px solid #374151;"></div>

        <div class="about-text" style="flex: 1.5; min-width: 300px;">
            <h2 style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 1rem; border-left: 4px solid #3B82F6; padding-left: 1rem;">My Story</h2>
            <p style="font-size: 1rem; color: #D1D5DB; line-height: 1.7;">
                {{ ucfirst(Auth::user()->userabout->content ?? 'यहां आप अपने बारे में विस्तार से लिख सकते हैं। अपनी यात्रा, अपने जुनून और आप जो करते हैं उसके बारे में बताएं। यह आपके व्यक्तित्व को दर्शाने का एक बेहतरीन मौका है।') }}
            </p>
        </div>
    </div>


    <div class="values-section" style="margin-bottom: 4rem;">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My Core Values</h2>
        <div class="values-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem;">

            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">💡</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Innovation</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I constantly seek new and creative ways to solve problems.</p>
            </div>
            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">🤝</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Collaboration</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I believe the best results come from effective teamwork.</p>
            </div>
            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">🎯</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Quality</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I am committed to delivering high-quality and robust work.</p>
            </div>

        </div>
    </div>


    <div class="skills-section" style="margin-bottom: 4rem;">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My Skills</h2>
        <div class="skills-list" style="max-width: 700px; margin: 0 auto; padding: 2rem; background-color: #1F2937; border-radius: 10px; border: 1px solid #374151;">

            <div class="skill-item" style="margin-bottom: 1.2rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>PHP / Laravel</span><span>90%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 90%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="skill-item" style="margin-bottom: 1.2rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>JavaScript / React</span><span>75%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 75%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="skill-item">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>HTML / CSS</span><span>95%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 95%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>

        </div>
    </div>


    <div class="cta-section" style="text-align: center; padding: 2rem; background-color: #1F2937; border-radius: 10px; border: 1px solid #374151;">
        <h3 style="font-size: 1.5rem; color: #FFFFFF; margin-bottom: 1rem;">Let's Build Something Amazing Together</h3>
        <p style="color: #9CA3AF; margin-bottom: 1.5rem;">Interested in working with me? Feel free to reach out.</p>
        <a href="/contact" class="cta-button" style="display: inline-block; background-color: #3B82F6; color: #FFFFFF; padding: 12px 25px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
            Contact Me
        </a>
    </div>

</div>

@endsection --}}




@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto mb-12 animate-fade">

        <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
            <div>
                <div class="inline-block px-3 py-1 mb-2 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">
                    My Journey
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-text-main">
                    About <span class="text-primary">{{ ucwords(Auth::user()->username) }}</span>
                </h1>
                <p class="text-muted mt-2 max-w-xl text-lg font-medium">
                    {{ ucfirst(Auth::user()->userabout->description ?? 'Welcome to my digital space. Here is a glimpse into my journey, projects, and what drives me as a developer.') }}
                </p>
            </div>

            @if (Auth::check())
                <a href="{{ route('about-me.edit', ['username' => Auth::user()->username]) }}"
                    class="px-5 py-2.5 rounded-full border border-custom bg-card text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center gap-2 shadow-sm group">
                    <iconify-icon icon="solar:pen-new-square-bold-duotone" class="text-lg group-hover:animate-pulse"></iconify-icon>
                    Edit Story
                </a>
            @endif
        </div>

        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 mb-12 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-40 h-40 bg-primary/10 rounded-full blur-3xl -ml-16 -mt-16 pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative w-full max-w-sm group">
                        <div class="absolute inset-0 bg-primary/20 rounded-[2rem] transform translate-x-3 translate-y-3 transition-transform group-hover:translate-x-4 group-hover:translate-y-4"></div>
                        <img src="{{ Auth::user()->profile?->profile_image ? asset('storage/'.Auth::user()->profile->profile_image) : asset('asset/img/profile.svg') }}"
                             alt="Profile Image"
                             class="relative rounded-[2rem] border border-custom shadow-sm w-full h-auto object-cover z-10 transition-transform duration-500 group-hover:scale-[1.02] bg-body">
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <h3 class="text-2xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:book-bookmark-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                        {{ ucfirst(Auth::user()->userabout->title ?? 'Engineering the Future, One Line of Code at a Time.') }}
                    </h3>

                    <div class="text-muted space-y-4 text-lg leading-relaxed font-medium">
                        <p>
                            {{ Auth::user()->userabout->content ?? 'I am a dedicated B.Tech Computer Science and Engineering student with a deep passion for building scalable software ecosystems from scratch. My journey started with a curiosity to understand how things work under the hood.' }}
                        </p>
                        <p>
                            Beyond high-level web frameworks, my core interest lies in low-level systems programming, hardware interfacing, and custom compiler design. Whether I am experimenting with IoT microcontrollers, configuring Linux servers, or developing core architectural structures, I believe in mastering the fundamentals of computer science to engineer truly optimized solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-12">
            <h3 class="text-2xl font-bold text-text-main mb-6 flex items-center gap-2 px-2">
                <iconify-icon icon="solar:star-fall-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                My Core Values
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-3.5 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 inline-flex mb-6 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:lightbulb-bolt-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h4 class="text-xl font-bold text-text-main mb-3">Hardcore Engineering</h4>
                    <p class="text-muted font-medium">Focusing on the "why" and "how" of technology. I prefer building systems from the ground up rather than relying solely on abstractions.</p>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-3.5 rounded-2xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 inline-flex mb-6 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:shield-check-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h4 class="text-xl font-bold text-text-main mb-3">Robust Architecture</h4>
                    <p class="text-muted font-medium">Committed to writing memory-safe, highly optimized, and maintainable code that scales seamlessly in production environments.</p>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                    <div class="p-3.5 rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 text-emerald-600 dark:text-emerald-400 inline-flex mb-6 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:target-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <h4 class="text-xl font-bold text-text-main mb-3">Continuous Learning</h4>
                    <p class="text-muted font-medium">Always researching, experimenting with new Linux distros, hardware hacking, and pushing the boundaries of my technical knowledge.</p>
                </div>
            </div>
        </div>

        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 mb-12 relative overflow-hidden">
            <div class="absolute bottom-0 right-0 w-40 h-40 bg-primary/10 rounded-full blur-3xl -mr-16 -mb-16 pointer-events-none"></div>

            <h3 class="text-2xl font-bold text-text-main mb-8 flex items-center gap-2">
                <iconify-icon icon="solar:code-square-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                Technical Arsenal
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">

                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-text-main flex items-center gap-2"><iconify-icon icon="logos:c-plusplus" class="text-xl"></iconify-icon> C / C++ (Systems)</span>
                        <span class="text-sm font-bold text-primary">95%</span>
                    </div>
                    <div class="w-full bg-body rounded-full h-3 border border-custom p-[1px]">
                        <div class="bg-primary h-full rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-text-main flex items-center gap-2"><iconify-icon icon="logos:laravel" class="text-xl"></iconify-icon> PHP / Laravel</span>
                        <span class="text-sm font-bold text-primary">90%</span>
                    </div>
                    <div class="w-full bg-body rounded-full h-3 border border-custom p-[1px]">
                        <div class="bg-primary h-full rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-text-main flex items-center gap-2"><iconify-icon icon="logos:spring-icon" class="text-xl"></iconify-icon> Java / Spring Boot</span>
                        <span class="text-sm font-bold text-primary">65%</span>
                    </div>
                    <div class="w-full bg-body rounded-full h-3 border border-custom p-[1px]">
                        <div class="bg-primary h-full rounded-full" style="width: 65%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-text-main flex items-center gap-2"><iconify-icon icon="logos:linux-tux" class="text-xl"></iconify-icon> Linux & Server Admin</span>
                        <span class="text-sm font-bold text-primary">85%</span>
                    </div>
                    <div class="w-full bg-body rounded-full h-3 border border-custom p-[1px]">
                        <div class="bg-primary h-full rounded-full" style="width: 85%"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-10 md:p-16 text-center relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

            <div class="relative z-10">
                <h3 class="text-3xl md:text-4xl font-bold text-text-main mb-6">Let's Build Something Extraordinary</h3>
                <p class="text-muted text-lg mb-8 max-w-2xl mx-auto font-medium">Whether it's discussing hardware integrations, compiler optimizations, or collaborating on a new software ecosystem, my inbox is always open.</p>

                <a href="{{ route('contact-me.show', ['username' => Auth::user()->username ?? 'admin']) }}" class="px-10 py-4 rounded-full bg-primary text-white font-bold text-lg shadow-apple hover:bg-primary-hover hover:shadow-lg hover:-translate-y-1 transition-all inline-flex items-center justify-center gap-2 w-full md:w-auto">
                    Get In Touch
                    <iconify-icon icon="solar:plain-3-bold-duotone" class="text-xl"></iconify-icon>
                </a>
            </div>
        </div>

    </div>

@endsection
