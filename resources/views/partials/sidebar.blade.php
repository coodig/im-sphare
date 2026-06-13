<div class="flex flex-col h-full p-4">

    <div class="mb-8 px-4">
        <a href="{{route('landing.show', ['username' => Auth::user()->username])}}" class="flex gap-2 items-center">

            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-8 h-8 object-contain">
            <span class="font-bold text-xl tracking-tight text-text-main">IMSPhare</span>
        </a>
    </div>

    <div class="flex-1 space-y-2 overflow-y-auto">
        @auth
            @php
                function getActiveClass($route)
                {
                    return request()->routeIs($route)
                        ? 'bg-primary/10 text-primary font-semibold shadow-sm'
                        : 'text-muted hover:bg-gray-100 dark:hover:bg-white/5 hover:text-text-main';
                }
            @endphp

            <a href="{{ route('home', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('home') }}">
                <iconify-icon icon="solar:home-2-bold-duotone" class="text-xl"></iconify-icon>
                <span>Home</span>
            </a>

            <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('dashboard.show') }}">
                <iconify-icon icon="duo-icons:dashboard" class="text-xl"></iconify-icon>
                <span>Dashboard</span>
            </a>

             @if (!empty(Auth::user()->githubToken()->exists()))
                <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('repos.index') }}">
                    <iconify-icon icon="solar:folder-with-files-bold-duotone" class="text-xl"></iconify-icon>
                    <span>Projects</span>
                </a>
            @endif
            <a href="{{ route('contact-me.show', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('contact-me.show') }}">
                <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="text-xl"></iconify-icon>
                <span>Contact Me</span>
            </a>
            <a href="{{ route('about-me.show', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('about-me.show') }}">
                <iconify-icon icon="streamline-logos:about-me-logo-block" class="text-xl"></iconify-icon>
                <span>About Me</span>
            </a>

            <a href="{{ route('academics.show', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('academics.show') }}">
                <iconify-icon icon="solar:notebook-bold-duotone" class="text-xl"></iconify-icon>
                <span>Academics</span>
            </a>

            <a href="{{ route('gallery.index', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 {{ getActiveClass('gallery.index') }}">
                <iconify-icon icon="solar:gallery-minimalistic-bold-duotone" class="text-xl"></iconify-icon>
                <span>Gallery</span>
            </a>
        @endauth
    </div>

    <div class="mt-auto pt-4 border-t border-custom space-y-2">
        @auth
            <a href="{{ route('settings.show', ['username' => Auth::user()->username]) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-muted hover:bg-gray-100 dark:hover:bg-white/5 transition-all {{ getActiveClass('settings.show') }}">
                <iconify-icon icon="solar:settings-bold-duotone" class="text-xl"></iconify-icon>
                <span>Settings</span>
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-all font-medium">
                    <iconify-icon icon="solar:logout-2-bold-duotone" class="text-xl"></iconify-icon>
                    <span>Logout</span>
                </button>
            </form>
        @endauth
    </div>
</div>
