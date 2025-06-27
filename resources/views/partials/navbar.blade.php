{{-- <nav class="custom-navbar">
    <div class="navbar-left">
        <div class="brand">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo" class="logo">
            <span class="brand-name">IMSPhare</span>
        </div>

        <div class="search">
            <input type="text" placeholder="Search..." />
            <button type="submit"><iconify-icon icon="ic:baseline-search"></iconify-icon></button>
        </div>
    </div>

    <div class="navbar-right"> --}}
        {{-- <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" onclick="toggleTheme()"></iconify-icon> --}}

        {{-- <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition" onclick="toggleTheme()" role="button" style="cursor: pointer;" ></iconify-icon> --}}

        {{-- <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" onclick="toggleTheme()" role="button" tabindex="0" aria-label="Toggle Theme"></iconify-icon> --}}


        {{-- @guest --}}
        {{-- <div class="auth-method">
            <a href="{{ route('signup.show')}}" class="signup">SignUp</a>
            <a href="{{ route('login.show')}}" class="login">LogIn</a>
        </div>
        @endguest
        @auth
            <span>Welcome, {{ ucfirst(Auth::user()->name)}}</span> --}}
            {{-- <span>Welcome, {{ (Auth::user()->name)}}</span> --}}

            {{-- <a href="{{ route('profile')}}">
                <div class="profile-icon">
                    <div class="outer">
                        <div class="inner"></div>
                    </div>
                </div>
            </a>
        @endauth


    </div>
</nav> --}}


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
            <span>Welcome, {{ ucfirst(Auth::user()->name) }}</span>
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
