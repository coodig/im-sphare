<nav class="custom-navbar">
    <div class="navbar-left">
        {{-- Brand --}}
        <div class="brand">
            {{-- <img src="{{ asset('asset/iocns/light-logo.png') }}" alt="Logo" class="logo"> --}}
            <a href="{{route('landing.show')}}"><img src="{{ asset('asset/icons/dark-logo.png') }}" alt="Logo" class="logo" dark-theme>
            <span class="brand-name">IMSPhare</span></a>
        </div>

        {{-- Search Bar --}}
        {{-- <form class="search" action="#" method="GET">
            <input type="text" name="query" placeholder="Search..." />
            <button type="submit">
                <iconify-icon icon="ic:baseline-search"></iconify-icon>
            </button>
        </form> --}}
    </div>

    <div class="navbar-right">
        {{-- Notification Bell icon --}}

        {{-- <iconify-icon id="notificationBellIcon" icon="line-md:bell-twotone-loop" onclick="toggleNotificationDropdown()"
            role="button" style="cursor: pointer;"></iconify-icon> --}}
            {{-- @auth
            <x-notification-bell/>
            @endauth --}}
        {{-- Theme Toggle --}}
        <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"
            onclick="toggleTheme()" role="button" style="cursor: pointer;"></iconify-icon>

        {{-- Full Screen --}}
        <iconify-icon id="fullScreenIcon" icon="solar:full-screen-square-bold-duotone" onclick="fullScreen()"
            role="button" style="cursor: pointer;"></iconify-icon>

        {{-- Auth Buttons --}}
        @guest
            <div class="auth-method">
                <a href="{{ route('signup.show') }}" class="signup">SignUp</a>
                &nbsp;/&nbsp;
                <a href="{{ route('login.show') }}" class="login" id="auth-login-btn">LogIn</a>
            </div>
        @endguest

        @auth
            <span class="welcome user-name">Welcome,&nbsp;{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username)}}</span>
            <a href="{{ route('profile.show', ['username' => Auth::user()->username])}}">
                    <div class="profile-icon">
                        <div class="outer">
                            <div class="inner"></div>
                        </div>
                    </div>
                </a>
        @endauth
    </div>
</nav>
