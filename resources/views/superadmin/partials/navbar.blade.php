<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="sidebar-toogle px-3"><img src="{{asset('asset/icons/bars.svg')}}"></div>
        <a class="navbar-brand" href="#">IMSphare</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"
                        onclick="toggleTheme()" role="button" style="cursor: pointer;" class="py-2"></iconify-icon>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
