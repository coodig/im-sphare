<nav class="flex items-center justify-between h-full px-4 md:px-8">

    <div class="flex items-center gap-4">
        <button id="toggleSidebar"
            class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-white/5 text-text-main transition-colors">
            <iconify-icon icon="solar:hamburger-menu-bold-duotone" width="24"></iconify-icon>
        </button>

        <a href="{{route('landing.show')}}" class="flex items-center cursor-pointer gap-2 lg:hidden">
            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-8 h-8">
            <span class="font-bold text-lg text-text-main">IMSPhare</span>
        </a>
    </div>

    <div class="flex items-center gap-3 md:gap-5 ml-auto">

        <button
            class="relative p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-text-main transition-colors group">
            <iconify-icon icon="solar:bell-bing-bold-duotone" width="24"
                class="group-hover:text-primary transition-colors"></iconify-icon>
            <span
                class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border border-white dark:border-black"></span>
        </button>

        <button onclick="toggleTheme()"
            class="px-2 py-1.5 rounded-full hover:bg-gray-100 dark:hover:bg-gray/5 text-text-main transition-colors">
            <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" width="24"></iconify-icon>
        </button>

        <button onclick="fullScreen()"
            class="hidden md:block p-2 rounded-full hover:bg-gray-100 dark:hover:bg-white/5 text-text-main transition-colors">
            <iconify-icon icon="solar:full-screen-square-bold-duotone" width="24"></iconify-icon>
        </button>

        @auth
            <div class="pl-2 border-l border-custom flex items-center gap-3">
                <div class="hidden md:block text-right">
                    <p class="text-sm font-bold text-text-main leading-tight">
                        {{ ucwords(Auth::user()->profile->name ?? Auth::user()->username) }}
                    </p>
                    <p class="text-xs text-muted">{{ ucfirst(Auth::user()->role) }}</p>
                </div>

                <a href="{{ route('profile.show', ['username' => Auth::user()->username])}}" class="relative group">
                    <div class="w-10 h-10 rounded-full border-2 border-primary p-0.5 hover:scale-105 transition-transform">
                        <img src="{{ Auth::user()->profile?->profile_image ? asset('storage/'.Auth::user()->profile->profile_image) : asset('asset/img/profile.svg') }}"
                            class="w-full h-full rounded-full object-cover bg-gray-200">
                    </div>
                </a>
            </div>
        @endauth

        @guest
            <a href="{{ route('login.show') }}"
                class="px-5 py-2 rounded-full bg-primary text-white text-sm font-bold shadow-md hover:bg-primary-hover transition-all">
                Login
            </a>
        @endguest
    </div>
</nav>
