<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="sidebar-toogle px-3"><img src="{{asset('asset/icons/bars.svg')}}"></div>
        <a class="navbar-brand" href="https://imsphare.oranbyte.com" target="_blank">IMSphare</a>

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
