<div class="sidebar-content">
    <div class="sidebar-top">
        @auth

            <a href="{{route('home', ['username' => Auth::user()->username])}}" class="{{nav_active('home')}}">
                <iconify-icon icon="solar:home-2-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Home</span>
            </a>

            <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('dashboard.show')}}"><iconify-icon icon="duo-icons:dashboard"></iconify-icon>
                <span class="sidebar-text">Dashboard</span>
            </a>

            <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('repos.index')}}"><iconify-icon
                    icon="solar:folder-with-files-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Projects</span>
            </a>

            <a href="{{ route('contact.show', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('contact.show')}}"><iconify-icon
                    icon="solar:phone-calling-rounded-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Contact Me</span>
            </a>

            {{-- <a href="{{ route('about-me.show', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('about-me.show')}}">
                <iconify-icon icon="solar:info-circle-bold-duotone"></iconify-icon>
                <span class="sidebar-text">About Me</span>
            </a> --}}
            <a href="{{ route('academics.show', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('academics.show')}}">
                <iconify-icon icon="solar:notebook-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Academics</span>
            </a>
            <a href="{{ route('gallery.show', ['username' => Auth::user()->username]) }}"
                class="{{nav_active('gallery.show')}}">
                <iconify-icon icon="solar:gallery-minimalistic-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Gallery</span>
            </a>
        @endauth
    </div>

    <div class="sidebar-bottom">
        @auth
            <a href="{{ route('settings.show', ['username' => Auth::user()->username ?? '']) }}"
                class="{{nav_active('settings.show')}}"><iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Setting</span></a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn red">
                    <iconify-icon icon="line-md:log-out"></iconify-icon>
                    <span class="sidebar-text">Logout</span>
                </button>
            </form>
        @endauth
    </div>
</div>
