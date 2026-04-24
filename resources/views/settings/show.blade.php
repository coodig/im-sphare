@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto mb-12 animate-fade">

        <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
            <div>
                <div
                    class="inline-block px-3 py-1 mb-3 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-xs font-bold uppercase tracking-wider">
                    System
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-3">
                    <iconify-icon icon="solar:settings-bold-duotone" class="text-primary"></iconify-icon>
                    Settings
                </h1>
                <p class="text-muted mt-2 text-lg">Manage your account preferences and system configurations.</p>
            </div>

            <a href="{{ route('profile.edit', ['username' => Auth::user()->username]) }}"
                class="px-6 py-3 rounded-full bg-primary text-white font-bold text-sm shadow-apple hover:bg-primary-hover hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <iconify-icon icon="solar:user-id-bold-duotone" class="text-lg"></iconify-icon>
                Edit Public Profile
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <div class="lg:col-span-3 space-y-2 sticky top-24 h-fit">
                <a href="#account"
                    class="block px-4 py-3 rounded-xl bg-primary/10 text-primary font-bold border-l-4 border-primary transition-all">
                    Account
                </a>
                <a href="#appearance"
                    class="block px-4 py-3 rounded-xl text-muted font-medium hover:bg-gray-50 dark:hover:bg-white/5 hover:text-text-main transition-all">
                    Appearance
                </a>
                <a href="#integrations"
                    class="block px-4 py-3 rounded-xl text-muted font-medium hover:bg-gray-50 dark:hover:bg-white/5 hover:text-text-main transition-all">
                    Integrations
                </a>
                <a href="#security"
                    class="block px-4 py-3 rounded-xl text-muted font-medium hover:bg-gray-50 dark:hover:bg-white/5 hover:text-text-main transition-all">
                    Security & Login
                </a>
                <a href="#danger"
                    class="block px-4 py-3 rounded-xl text-red-500 font-medium hover:bg-red-50 dark:hover:bg-red-900/10 transition-all">
                    Danger Zone
                </a>
            </div>

            <div class="lg:col-span-9 space-y-8">

                <div id="account" class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 scroll-mt-24">
                    <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:user-circle-bold-duotone" class="text-blue-500 text-2xl"></iconify-icon>
                        Personal Information
                    </h3>
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-text-main mb-2 ml-1">Full Name</label>
                                <input type="text" value="{{ Auth::user()->profile->name ?? 'Not Available' }}" readonly
                                    disabled
                                    class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom text-muted font-medium cursor-not-allowed">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-text-main mb-2 ml-1">Email Address</label>
                                <input type="text" value="{{ Auth::user()->email }}" readonly disabled
                                    class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom text-muted font-medium cursor-not-allowed">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="appearance" class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 scroll-mt-24">
                    <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:palette-bold-duotone" class="text-purple-500 text-2xl"></iconify-icon>
                        Appearance
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label class="cursor-pointer group">
                            <input type="radio" name="theme_selector" value="light" class="peer hidden"
                                onclick="toggleTheme('light')">
                            <div
                                class="p-4 rounded-2xl border-2 border-custom bg-gray-50 peer-checked:border-primary peer-checked:bg-white peer-checked:shadow-lg transition-all h-full">
                                <h4 class="font-bold text-gray-800 flex items-center gap-2"><iconify-icon
                                        icon="solar:sun-bold-duotone"></iconify-icon> Light Mode</h4>
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input type="radio" name="theme_selector" value="dark" class="peer hidden"
                                onclick="toggleTheme('dark')">
                            <div
                                class="p-4 rounded-2xl border-2 border-custom bg-gray-900 peer-checked:border-primary peer-checked:bg-gray-800 peer-checked:shadow-lg transition-all h-full">
                                <h4 class="font-bold text-white flex items-center gap-2"><iconify-icon
                                        icon="solar:moon-stars-bold-duotone"></iconify-icon> Dark Mode</h4>
                            </div>
                        </label>
                    </div>
                </div>

                <div id="integrations" class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 scroll-mt-24">
                    <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:plug-circle-bold-duotone" class="text-orange-500 text-2xl"></iconify-icon>
                        Connected Apps
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="p-6 rounded-2xl bg-body border border-custom hover:border-primary/50 transition-all group">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <iconify-icon icon="logos:github-icon" class="text-3xl"></iconify-icon>
                                    <div>
                                        <h4 class="font-bold text-text-main">GitHub</h4>
                                        <p class="text-xs text-muted">Sync repositories</p>
                                    </div>
                                </div>
                                @if(isset($githubToken) && $githubToken) <span
                                    class="px-2 py-1 rounded-full bg-green-500/10 text-green-500 text-[10px] font-bold border border-green-500/20">Connected</span>
                                @else
                                    <span
                                        class="px-2 py-1 rounded-full bg-gray-500/10 text-muted text-[10px] font-bold border border-gray-500/20">Not
                                        Connected</span>
                                @endif
                            </div>

                            <p class="text-sm text-muted mb-6">Connect your GitHub account to automatically fetch and
                                display your projects on your profile.</p>

                            <a href="{{ route('github.form.show', ['username' => Auth::user()->username]) }}"
                                class="block w-full py-3 rounded-xl bg-text-main text-body font-bold text-center hover:scale-[1.02] transition-transform">
                                Manage Connection
                            </a>
                        </div>

                        <div class="p-6 rounded-2xl bg-body border border-custom opacity-60">
                            <div class="flex items-center gap-3 mb-4">
                                <iconify-icon icon="logos:linkedin-icon" class="text-3xl grayscale"></iconify-icon>
                                <div>
                                    <h4 class="font-bold text-text-main">LinkedIn</h4>
                                    <p class="text-xs text-muted">Coming Soon</p>
                                </div>
                            </div>
                            <p class="text-sm text-muted mb-6">Display your professional experience and certifications
                                directly from LinkedIn.</p>
                            <button disabled
                                class="block w-full py-3 rounded-xl bg-gray-100 dark:bg-white/5 text-muted font-bold text-center cursor-not-allowed">
                                Unavailable
                            </button>
                        </div>
                    </div>
                </div>

                <div id="security" class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 scroll-mt-24">
                    <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:shield-check-bold-duotone" class="text-green-500 text-2xl"></iconify-icon>
                        Login Activity
                    </h3>
                    <div class="p-4 rounded-xl bg-body border border-custom text-center text-muted text-sm">
                        No recent suspicious activity detected.
                    </div>

                    <div class="justify-between text-text-main align-center"><a
                            href="{{ route('login-activity.index', ['username' => Auth::user()->username]) }}">View
                            All</a><iconify-icon icon="solar:map-arrow-right-bold-duotone"></iconify-icon></div>
                </div>

                {{-- <div id="danger"
                    class="rounded-[2rem] border border-red-200 dark:border-red-900/50 bg-red-50/50 dark:bg-red-900/10 p-8 scroll-mt-24">
                    --}}
                    <div id="danger" class="rounded-[2rem] border border-red-200 dark:border-red-900/50 p-8 scroll-mt-24">
                        <h3 class="text-xl font-bold text-red-600 mb-2 flex items-center gap-2">
                            <iconify-icon icon="solar:danger-triangle-bold-duotone" class="text-2xl"></iconify-icon>
                            Danger Zone
                        </h3>
                        <p class="text-sm text-red-500/80 mb-6">Perform sensitive actions here.</p>

                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-text-main">Log Out</h4>
                                <p class="text-xs dark:text-muted">End your session.</p>
                            </div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="px-6 py-2.5 rounded-xl bg-white dark:bg-card border border-red-200 dark:border-red-800 text-red-600 font-bold text-sm shadow-sm hover:bg-red-50 dark:hover:bg-red-900/20 transition-all flex items-center gap-2">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const currentTheme = localStorage.getItem('theme') || 'light';
                const radio = document.querySelector(`input[name="theme_selector"][value="${currentTheme}"]`);
                if (radio) radio.checked = true;
            });

            function toggleTheme(theme) {
                document.documentElement.className = theme === 'dark' ? 'dark-theme' : '';
                localStorage.setItem('theme', theme);
            }
        </script>

@endsection
