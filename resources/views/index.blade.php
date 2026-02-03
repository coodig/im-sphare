<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Lexend Deca', 'sans-serif'], },
                    colors: {
                        primary: 'var(--primary-color)', 'primary-hover': 'var(--btn-primary-hover)', body: 'var(--bg-color)', card: 'var(--card-bg)', navbar: 'var(--navbar-bg)', footer: 'var(--footer-bg)', 'text-main': 'var(--text-color)', muted: 'var(--muted-text)', custom: 'var(--border-color)',
                    },
                    boxShadow: {
                        'apple': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                        'apple-hover': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            :root {
                --primary-color: #0071e3; --btn-primary-hover: #0077ed; --bg-color: #f5f5f7; --card-bg: #ffffff; --text-color: #1d1d1f; --muted-text: #86868b; --navbar-bg: rgba(255, 255, 255, 0.8); --border-color: #d2d2d7; --footer-bg: #ebecf0;
            }
            .dark-theme {
                --primary-color: #2997ff; --btn-primary-hover: #0071e3; --bg-color: #000000; --card-bg: #1c1c1e; --text-color: #f5f5f7; --muted-text: #86868b; --navbar-bg: rgba(0, 0, 0, 0.8); --border-color: #424245; --footer-bg: #151516;
            }
            body { @apply bg-body text-text-main transition-colors duration-500; font-family: 'Lexend Deca', sans-serif; overflow-x: hidden; }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(40px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .scroll-trigger { opacity: 0; }
        .scroll-trigger.is-visible {
            animation: fadeUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .animate-float { animation: float 6s ease-in-out infinite; }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
    </style>
</head>

<body class="antialiased selection:bg-primary selection:text-white">

    <div class="flex flex-col min-h-screen">

        <nav
            class="fixed top-0 left-0 z-50 w-full h-[75px] flex justify-between items-center px-4 md:px-8 bg-navbar backdrop-blur-md shadow-sm border-b border-custom transition-all duration-500 scroll-trigger is-visible">
            <div class="flex items-center gap-2">
                <a href="{{route('landing.show')}}" class="flex items-center gap-2 group">
                    <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo"
                        class="w-9 h-9 group-hover:scale-110 transition-transform duration-300">
                    <span class="font-bold text-xl tracking-tight text-text-main">IMSPhare</span>
                </a>
            </div>
            <div class="flex items-center gap-5">
                <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"
                    onclick="toggleTheme()" role="button"
                    class="text-2xl cursor-pointer text-text-main hover:text-primary transition-colors"></iconify-icon>
                <iconify-icon id="fullScreenIcon" icon="solar:full-screen-square-bold-duotone" onclick="fullScreen()"
                    role="button"
                    class="text-2xl cursor-pointer hidden md:block text-text-main hover:text-primary transition-colors"></iconify-icon>
                @guest
                    <div class="flex items-center gap-3">
                        <a href="{{ route('signup.show') }}"
                            class="hidden md:block font-medium text-text-main hover:text-primary hover:underline">SignUp</a>
                        <a href="{{ route('login.show') }}"
                            class="px-5 py-2 border-2 border-text-main text-text-main font-medium rounded-full hover:bg-text-main hover:text-body transition-colors">LogIn</a>
                    </div>
                @endguest
                @auth
                    <div class="flex items-center gap-3">
                        <span
                            class="hidden md:block font-medium text-text-main">Welcome,&nbsp;{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username)}}</span>
                        <a href="{{ route('profile.show', ['username' => Auth::user()->username])}}" class="relative group">
                            <div
                                class="w-10 h-10 rounded-full border-2 border-primary flex items-center justify-center p-0.5 hover:scale-105 transition-transform">
                                <div class="w-full h-full rounded-full bg-primary"></div>
                            </div>
                        </a>
                    </div>
                @endauth
            </div>
        </nav>

        <div class="flex-1 mt-[75px]">

            <section id="imsphare-hero"
                class="relative px-6 py-24 md:py-32 lg:px-20 flex flex-col md:flex-row items-center overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full -z-10 opacity-40">
                    <img src="{{asset('asset/img/l_1.svg')}}" class="w-full h-full object-cover animate-float">
                </div>

                <div class="relative z-10 max-w-2xl w-full text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-text-main">
                        Build Your Portfolio for <br>
                        <span class="text-primary" id="typewriter"></span><span class="animate-blink">|</span>
                    </h1>

                    <script>
                        const words = ["Developers.", "Designers.", "Freelancers.", "Everyone."];
                        let i = 0;
                        let timer;

                        function typingEffect() {
                            let word = words[i].split("");
                            var loopTyping = function () {
                                if (word.length > 0) {
                                    document.getElementById('typewriter').innerHTML += word.shift();
                                } else {
                                    setTimeout(deletingEffect, 2000);
                                    return false;
                                }
                                timer = setTimeout(loopTyping, 100);
                            };
                            loopTyping();
                        }

                        function deletingEffect() {
                            let word = words[i].split("");
                            var loopDeleting = function () {
                                if (word.length > 0) {
                                    word.pop();
                                    document.getElementById('typewriter').innerHTML = word.join("");
                                } else {
                                    if (words.length > (i + 1)) { i++; } else { i = 0; }
                                    typingEffect();
                                    return false;
                                }
                                timer = setTimeout(loopDeleting, 50);
                            };
                            loopDeleting();
                        }
                        typingEffect();
                    </script>

                    <style>
                        .animate-blink {
                            animation: blink 1s infinite;
                        }

                        @keyframes blink {

                            0%,
                            100% {
                                opacity: 1;
                            }

                            50% {
                                opacity: 0;
                            }
                        }
                    </style>
                    <p class="text-xl md:text-2xl text-muted mb-8 leading-relaxed scroll-trigger is-visible delay-100">
                        Showcase your skills, projects, and achievements in minutes.
                    </p>

                    <div class="scroll-trigger is-visible delay-200">
                        @guest
                            <a href="{{route('signup.show')}}"
                                class="inline-block px-8 py-3 bg-primary text-white text-lg font-bold rounded-full shadow-apple hover:shadow-apple-hover hover:bg-primary-hover transform hover:-translate-y-1 transition-all duration-300">
                                Create Your Portfolio
                            </a>
                        @endguest
                        @auth
                            {{-- <x-action-button
                                url="{{ route('dashboard.show', ['username' => auth()->user()->username]) }}" type="view"
                                label="Continue to Dashboard"
                                class="inline-block px-8 py-3 bg-primary text-white text-lg font-bold rounded-full shadow-apple hover:shadow-apple-hover hover:bg-primary-hover transition-all" />
                            --}}
                            <a href="{{route('dashboard.show', ['username' => Auth::user()->username])}}"
                                class="inline-block px-8 py-3 bg-primary text-white text-lg font-bold rounded-full shadow-apple hover:shadow-apple-hover hover:bg-primary-hover transform transition-all">
                                Continue to Dashboard
                            </a>
                        @endauth
                    </div>
                </div>
            </section>

            <section id="imsphare-features"
                class="py-20 px-6 md:px-12 bg-footer text-center transition-colors duration-500">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-text-main scroll-trigger">Why IMSphare?</h2>

                <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-12 max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 gap-6 w-full md:w-1/2 text-left pl-0 md:pl-12">
                        <div
                            class="flex items-center gap-4 text-xl font-medium text-text-main group scroll-trigger delay-100 bg-card  border-custom rounded-2xl overflow-hidden px-2.5 py-2 justify-center">
                            <iconify-icon icon="noto:artist-palette"
                                class="text-4xl group-hover:-translate-y-1 transition-transform"></iconify-icon>
                            Easy Portfolio Builder
                        </div>
                        <div
                            class="flex items-center gap-4 text-xl font-medium text-text-main group scroll-trigger delay-200 bg-card  border-custom rounded-2xl overflow-hidden px-2.5 py-2 justify-center">
                            <iconify-icon icon="noto:high-voltage"
                                class="text-4xl group-hover:-translate-y-1 transition-transform"></iconify-icon>
                            Fast & Responsive
                        </div>
                        <div
                            class="flex items-center gap-4 text-xl font-medium text-text-main group scroll-trigger delay-300 bg-card  border-custom rounded-2xl overflow-hidden px-2.5 py-2 justify-center">
                            <iconify-icon icon="noto:bar-chart"
                                class="text-4xl group-hover:-translate-y-1 transition-transform"></iconify-icon>
                            Analytics & Insights
                        </div>
                        <div
                            class="flex items-center gap-4 text-xl font-medium text-text-main group scroll-trigger delay-400 bg-card  border-custom rounded-2xl overflow-hidden px-2.5 py-2 justify-center">
                            <iconify-icon icon="noto:locked"
                                class="text-4xl group-hover:-translate-y-1 transition-transform"></iconify-icon>
                            Secure & Reliable
                        </div>
                    </div>

                    <div class="w-full md:w-5/12 scroll-trigger">
                        <img src="{{asset('asset/img/l_2.svg')}}" alt=""
                            class="w-full h-auto drop-shadow-xl animate-float">
                    </div>
                </div>
            </section>
            <section class="py-24 px-6 max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-text-main mb-4">Everything you need</h2>
                    <p class="text-muted text-lg">Powerful features to help you grow your career.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="md:col-span-2 bg-card border border-custom rounded-[2rem] p-8 relative overflow-hidden group hover:border-primary/50 transition-colors">
                        <div class="relative z-10">
                            <iconify-icon icon="solar:github-bold-duotone"
                                class="text-5xl text-text-main mb-4"></iconify-icon>
                            <h3 class="text-2xl font-bold text-text-main mb-2">GitHub Sync</h3>
                            <p class="text-muted">Automatically fetch your repositories and display them instantly. No
                                manual entry needed.</p>
                        </div>
                        <div
                            class="absolute right-0 bottom-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl group-hover:bg-primary/20 transition-all">
                        </div>
                    </div>

                    <div
                        class="bg-card border border-custom rounded-[2rem] p-8 group hover:border-primary/50 transition-colors">
                        <iconify-icon icon="solar:shield-check-bold-duotone"
                            class="text-5xl text-green-500 mb-4"></iconify-icon>
                        <h3 class="text-xl font-bold text-text-main mb-2">SSL Secure</h3>
                        <p class="text-muted text-sm">Your data is encrypted and safe with industry standards.</p>
                    </div>

                    <div
                        class="bg-card border border-custom rounded-[2rem] p-8 group hover:border-primary/50 transition-colors">
                        <iconify-icon icon="solar:pallete-2-bold-duotone"
                            class="text-5xl text-purple-500 mb-4"></iconify-icon>
                        <h3 class="text-xl font-bold text-text-main mb-2">Dark Mode</h3>
                        <p class="text-muted text-sm">Built-in theme switching for better accessibility.</p>
                    </div>

                    <div
                        class="md:col-span-2 bg-card border border-custom rounded-[2rem] p-8 relative overflow-hidden group hover:border-primary/50 transition-colors">
                        <div class="relative z-10">
                            <iconify-icon icon="solar:chart-2-bold-duotone"
                                class="text-5xl text-blue-500 mb-4"></iconify-icon>
                            <h3 class="text-2xl font-bold text-text-main mb-2">Profile Analytics</h3>
                            <p class="text-muted">Track who is viewing your portfolio and which projects are getting
                                attention.</p>
                        </div>
                        <div
                            class="absolute right-0 bottom-0 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-500/20 transition-all">
                        </div>
                    </div>
                </div>
            </section>



            <section id="imsphare-how" class="py-24 px-6 bg-body text-center transition-colors duration-500">
                <h2 class="text-3xl md:text-4xl font-bold mb-16 text-text-main scroll-trigger">How It Works</h2>

                <div class="flex flex-col md:flex-row justify-center gap-8 max-w-6xl mx-auto">
                    <div
                        class="flex-1 bg-card p-8 rounded-3xl shadow-apple border border-custom hover:shadow-apple-hover transition-all duration-300 scroll-trigger delay-100 hover:-translate-y-2">
                        <div class="w-full mb-6">
                            <img src="{{asset('asset/img/l_3.svg')}}" alt="Step 1" class="w-3/4 mx-auto">
                        </div>
                        <div class="text-xl font-bold text-text-main">1. Sign Up</div>
                    </div>

                    <div
                        class="flex-1 bg-card p-8 rounded-3xl shadow-apple border border-custom hover:shadow-apple-hover transition-all duration-300 scroll-trigger delay-200 hover:-translate-y-2">
                        <div class="w-full mb-6">
                            <img src="{{asset('asset/img/l_4.svg')}}" alt="Step 2" class="w-3/4 mx-auto">
                        </div>
                        <div class="text-xl font-bold text-text-main">2. Customize Portfolio</div>
                    </div>

                    <div
                        class="flex-1 bg-card p-8 rounded-3xl shadow-apple border border-custom hover:shadow-apple-hover transition-all duration-300 scroll-trigger delay-300 hover:-translate-y-2">
                        <div class="w-full mb-6">
                            <img src="{{asset('asset/img/l_5.svg')}}" alt="Step 3" class="w-3/4 mx-auto">
                        </div>
                        <div class="text-xl font-bold text-text-main">3. Share & Grow</div>
                    </div>
                </div>
            </section>

            <section id="imsphare-testimonials" class="py-24 px-6 bg-footer text-center transition-colors duration-500">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-text-main scroll-trigger">Testimonials</h2>

                <div class="flex flex-wrap justify-center gap-8 max-w-6xl mx-auto">
                    <div
                        class="bg-card p-8 rounded-3xl shadow-apple border border-custom flex-1 min-w-[300px] hover:-translate-y-2 transition-transform duration-300 scroll-trigger delay-100">
                        <div class="w-24 h-24 mx-auto mb-6">
                            <img src="{{asset('asset/img/profile.svg')}}" alt="User Photo"
                                class="w-full h-full object-cover rounded-full border-4 border-text-main">
                        </div>
                        <div class="text-text-main">
                            <p class="italic mb-4 text-lg">"This portfolio platform has helped me showcase my work in a
                                professional way. A big thanks to the developer!"</p>
                            <strong class="text-primary block text-lg">{{ucwords('Shubham Kumar')}}</strong>
                        </div>
                    </div>

                    <div
                        class="bg-card p-8 rounded-3xl shadow-apple border border-custom flex-1 min-w-[300px] hover:-translate-y-2 transition-transform duration-300 scroll-trigger delay-200">
                        <div class="w-24 h-24 mx-auto mb-6">
                            <img src="{{asset('asset/img/profile.svg')}}" alt="User Photo"
                                class="w-full h-full object-cover rounded-full border-4 border-text-main">
                        </div>
                        <div class="text-text-main">
                            <p class="italic mb-4 text-lg">"Imsphare is a great initiative for students and
                                professionals. The developer behind this platform has done an amazing job!"</p>
                            <strong class="text-primary block text-lg">{{ucwords('Adarsh Vishwakarama')}}</strong>
                        </div>
                    </div>
                </div>
            </section>

            <section id="imsphare-cta" class="py-20 px-6 bg-primary overflow-hidden scroll-trigger">
                <div
                    class="relative flex flex-col md:flex-row items-center justify-between gap-10 max-w-5xl mx-auto p-8 md:p-12 bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl shadow-2xl">
                    <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/20 rounded-full blur-3xl animate-float">
                    </div>

                    <img src="{{asset('asset/img/l_7.svg')}}" alt="Join Us"
                        class="relative z-10 w-full md:w-1/2 max-w-xs drop-shadow-2xl hover:scale-105 transition-transform duration-500 delay-100 scroll-trigger">

                    <div
                        class="flex flex-col items-center md:items-start text-center md:text-left z-10 delay-200 scroll-trigger">
                        <h2 class="text-3xl font-bold text-white mb-4">Connect for a better experience!</h2>
                        <p class="text-white/80 mb-8 text-lg">Join our growing team and community.</p>

                        <a href="https://github.com/coodig" target="_blank"
                            class="group relative inline-flex items-center gap-2 px-8 py-3.5 bg-white text-primary font-bold text-lg rounded-full shadow-lg hover:shadow-white/50 hover:-translate-y-1 transition-all duration-300">
                            <span>Join Our Team</span>
                            <iconify-icon icon="solar:arrow-right-bold"
                                class="transition-transform group-hover:translate-x-1"></iconify-icon>
                        </a>
                    </div>
                </div>
            </section>

            <section class="border-y border-custom bg-body/50 backdrop-blur-sm py-6 ">
                <div
                    class="max-w-7xl mx-auto px-6 flex flex-wrap justify-center md:justify-between items-center gap-8 text-center my-20">
                    <div>
                        <h4 class="text-3xl font-bold text-text-main">100+</h4>
                        <p class="text-sm text-muted uppercase tracking-wider">Portfolios Built</p>
                    </div>
                    <div class="hidden md:block w-px h-10 bg-custom"></div>
                    <div>
                        <h4 class="text-3xl font-bold text-text-main">500+</h4>
                        <p class="text-sm text-muted uppercase tracking-wider">GitHub Repos Linked</p>
                    </div>
                    <div class="hidden md:block w-px h-10 bg-custom"></div>
                    <div>
                        <h4 class="text-3xl font-bold text-text-main">99.9%</h4>
                        <p class="text-sm text-muted uppercase tracking-wider">Uptime</p>
                    </div>
                </div>
            </section>
            <section class="py-20 px-6 max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-text-main">Frequently Asked Questions</h2>

                <div class="space-y-4">
                    <div class="bg-card border border-custom rounded-2xl overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-bold text-text-main flex justify-between items-center focus:outline-none"
                            onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('iconify-icon').classList.toggle('rotate-180')">
                            Is IMSPhare free to use?
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="transition-transform duration-300"></iconify-icon>
                        </button>
                        <div class="px-6 pb-4 text-muted hidden">
                            Yes! You can create a basic portfolio completely for free. We also offer premium features
                            for advanced users.
                        </div>
                    </div>

                    <div class="bg-card border border-custom rounded-2xl overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-bold text-text-main flex justify-between items-center focus:outline-none"
                            onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('iconify-icon').classList.toggle('rotate-180')">
                            Can I connect my custom domain?
                            <iconify-icon icon="solar:alt-arrow-down-linear"
                                class="transition-transform duration-300"></iconify-icon>
                        </button>
                        <div class="px-6 pb-4 text-muted hidden">
                            Currently, we provide a username-based URL (imsphare.com/username). Custom domain support is
                            coming soon!
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <footer
            class="bg-body pt-20 pb-10 border-t border-custom transition-colors duration-500 relative overflow-hidden">

            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-custom to-transparent">
            </div>

            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">

                    <div class="lg:col-span-4 space-y-6">
                        <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo"
                                class="w-8 h-8 group-hover:rotate-12 transition-transform duration-300">
                            <span class="font-bold text-2xl text-text-main tracking-tight">IMSPhare</span>
                        </a>
                        <p class="text-muted text-base leading-relaxed max-w-sm">
                            The ultimate portfolio builder for developers. Sync your GitHub, showcase your projects, and
                            land your dream job faster.
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <a href="https://github.com/adarshsharma1350" target="_blank"
                                class="w-10 h-10 rounded-full border border-custom flex items-center justify-center text-muted hover:text-text-main hover:bg-card hover:border-text-main transition-all group">
                                <iconify-icon icon="logos:github-icon"
                                    class="text-xl opacity-70 group-hover:opacity-100"></iconify-icon>
                            </a>
                            <a href="https://linkedin.com/in/adarsh-vishwakarama-9a9a15210" target="_blank"
                                class="w-10 h-10 rounded-full border border-custom flex items-center justify-center text-muted hover:text-[#0077b5] hover:bg-card hover:border-[#0077b5] transition-all group">
                                <iconify-icon icon="logos:linkedin-icon"
                                    class="text-xl opacity-70 group-hover:opacity-100"></iconify-icon>
                            </a>
                            <a href="mailto:adarshsharma1350@gmail.com"
                                class="w-10 h-10 rounded-full border border-custom flex items-center justify-center text-muted hover:text-red-500 hover:bg-card hover:border-red-500 transition-all group">
                                <iconify-icon icon="solar:letter-bold-duotone"
                                    class="text-xl group-hover:scale-110 transition-transform"></iconify-icon>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-8 grid grid-cols-2 md:grid-cols-3 gap-8">

                        <div>
                            <h3 class="font-bold text-text-main mb-6">Product</h3>
                            <ul class="space-y-4">
                                <li><a href="#imsphare-features"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Features</a>
                                </li>
                                <li><a href="#imsphare-how"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">How
                                        it works</a></li>
                                @auth
                                    <li><a href="{{ route('dashboard.show', ['username' => Auth::user()->username ?? 'guest']) }}"
                                            class="text-muted hover:text-primary transition-colors text-sm font-medium">Dashboard</a>
                                    </li>
                                @endauth
                                <li>
                                    <a href="{{ route('api-access.show') }}"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium flex items-center gap-2">
                                        API Access <span
                                            class="px-1.5 py-0.5 rounded text-[10px] bg-primary/10 text-primary font-bold border border-primary/20">SOON</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-text-main mb-6">Company</h3>
                            <ul class="space-y-4">
                                <li><a href="{{ route('about-us.show')}}"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">About
                                        Us</a></li>
                                <li><a href="https://github.com/coodig" target="_blank"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Join
                                        Team</a></li>
                                <li><a href="{{ route('contact-us.show') }}"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Contact
                                        Support</a></li>
                                <li><a href="#"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Brand
                                        Kit</a></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-text-main mb-6">Legal</h3>
                            <ul class="space-y-4">
                                <li><a href="{{ route('privacy.show') }}"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Privacy
                                        Policy</a></li>
                                <li><a href="{{ route('terms.show')}}"
                                        class="text-muted hover:text-primary transition-colors text-sm font-medium">Terms
                                        of Service</a></li>
                                @auth

                                    <li><a href="{{ route('cookies-policy.show') }}"
                                            class="text-muted hover:text-primary transition-colors text-sm font-medium">Cookie
                                            Policy</a></li>
                                    <li><a href="{{ route('security.show') }}"
                                            class="text-muted hover:text-primary transition-colors text-sm font-medium">Security</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="border-t border-custom pt-8 flex flex-col md:flex-row justify-between items-center gap-4">

                    <p class="text-sm text-muted">
                        &copy; {{ date('Y') }} <span class="font-bold text-text-main">IMSPhare</span>. All rights
                        reserved.
                    </p>

                    <div class="flex items-center gap-1 text-sm text-muted">
                        <span>Made with</span>
                        <iconify-icon icon="solar:heart-bold" class="text-red-500 animate-pulse"></iconify-icon>
                        <span>in India, UP.</span>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('asset/js/script.js')}}"></script>
    <script src="{{ asset('asset/js/landing.js')}}"></script>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
        }

        document.addEventListener("DOMContentLoaded", function () {
            const animatedElements = document.querySelectorAll('.scroll-trigger');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            animatedElements.forEach(el => observer.observe(el));
        });
    </script>

</body>

</html>
