<div class="sidebar-content">
    <div class="sidebar-top">
        {{-- <button id="toggleSidebar" class="collapse-toggle">
            <iconify-icon icon="line-md:menu-fold-left"></iconify-icon>
        </button> --}}
        @auth

            <a href="{{route('home', ['username' => Auth::user()->username])}}"><iconify-icon
                    icon="solar:home-2-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Home</span></a>

            <a href="{{ route('dashboard.show', ['username' => Auth::user()->username]) }}"><iconify-icon
                    icon="duo-icons:dashboard"></iconify-icon>
                <span class="sidebar-text">Dashboard</span></a>

            <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"><iconify-icon
                    icon="solar:folder-with-files-bold-duotone"></iconify-icon>
                <span class="sidebar-text">Project</span></a>

        {{-- <a href="{{ route('contact.show',['username'=>Auth::user()->username]) }}"><iconify-icon
                icon="solar:phone-calling-rounded-bold-duotone"></iconify-icon>
            <span class="sidebar-text">Contact</span></a> --}}

        {{-- <a href="{{ route('about_me.show',['username'=>Auth::user()->profile->username]) }}"><iconify-icon
                icon="solar:info-circle-bold-duotone"></iconify-icon>
            <span class="sidebar-text">About</span></a> --}}


            <a href="{{ route('about_me.show', ['username' => Auth::user()->username]) }}">
                <iconify-icon icon="solar:info-circle-bold-duotone"></iconify-icon>
                <span class="sidebar-text">About</span>
            </a>
        @endauth
    </div>

    <div class="sidebar-bottom">
        @auth
            <a href="{{ route('settings.show', ['username' => Auth::user()->username ?? '']) }}"><iconify-icon
                    icon="solar:settings-bold-duotone"></iconify-icon>
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
