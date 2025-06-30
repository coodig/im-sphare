<nav class="custom-navbar">
    <div class="navbar-left">
        {{-- Brand --}}
        <div class="brand">
            {{-- <img src="{{ asset('asset/iocns/light-logo.png') }}" alt="Logo" class="logo"> --}}
            <img src="{{ asset('asset/icons/dark-logo.png') }}" alt="Logo" class="logo" dark-theme>
            <span class="brand-name">IMSPhare</span>
        </div>

        {{-- Search Bar --}}
        <form class="search" action="#" method="GET">
            <input type="text" name="query" placeholder="Search..." />
            <button type="submit">
                <iconify-icon icon="ic:baseline-search"></iconify-icon>
            </button>
        </form>
    </div>

    <div class="navbar-right">
        {{-- Theme Toggle --}}
        <iconify-icon id="themeToggleIcon"
            icon="line-md:moon-filled-to-sunny-filled-loop-transition"
            onclick="toggleTheme()"
            role="button"
            style="cursor: pointer;"
        ></iconify-icon>

        {{-- Auth Buttons --}}
        @guest
            <div class="auth-method">
                <a href="{{ route('signup.show') }}" class="signup">SignUp</a>
                <a href="{{ route('login.show') }}" class="login">LogIn</a>
            </div>
        @endguest

        @auth
            <span class="welcome">Welcome,</span><span class="nav-user-name"> {{ ucwords(Auth::user()->name) }}</span>
            <a href="{{ route('profile')}}">
                <div class="profile-icon">
                    <div class="outer">
                        <div class="inner"></div>
                    </div>
                </div>
            </a>
        @endauth
    </div>
</nav>
