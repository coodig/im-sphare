{{-- <nav class="navbar navbar-expand-lg">
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
</nav> --}}

{{--
<header class="navbar navbar-expand-lg bg-white sticky-top shadow-sm border-bottom px-4 py-3">
    <div class="container-fluid p-0 d-flex justify-content-between align-items-center">

        <!-- Left Side: Toggle & Breadcrumbs -->
        <div class="d-flex align-items-center gap-3">
            <div class="sidebar-toogle" style="cursor: pointer;">
                <img src="{{ asset('asset/icons/bars.svg') }}" alt="Toggle" width="24">
            </div>
            <nav aria-label="breadcrumb" class="d-none d-md-block mt-3 ms-2">
                <ol class="breadcrumb mb-0 fs-6">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary fw-medium">imSphare</a></li>
                    <li class="breadcrumb-item active fw-bold text-dark" aria-current="page">Admin Control</li>
                </ol>
            </nav>
        </div>

        <!-- Right Side: Search, Theme, Profile -->
        <div class="d-flex align-items-center gap-3 gap-md-4">

            <!-- Pro Search Box -->
            <div class="position-relative d-none d-lg-block">
                <iconify-icon icon="solar:magnifer-linear" class="position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></iconify-icon>
                <input type="text" class="form-control bg-light border-0 rounded-pill ps-5 pe-5 py-2 shadow-none" placeholder="Search..." style="width: 250px;">
            </div>

            <!-- Action Icons -->
            <div class="d-flex align-items-center gap-1">
                <!-- Theme Toggle Button -->
                <button class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center text-secondary border-0 icon-hover" style="width: 42px; height: 42px;" onclick="toggleTheme()">
                    <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition" class="fs-4"></iconify-icon>
                </button>
            </div>

            <div class="vr d-none d-md-flex text-secondary" style="opacity: 0.15; height: 35px; align-self: center;"></div>

            <!-- Profile Dropdown with Logout -->
            <div class="dropdown">
                <button class="btn btn-light bg-transparent border-0 d-flex align-items-center gap-2 p-1 pe-3 rounded-pill shadow-sm" type="button" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <img src="https://ui-avatars.com/api/?name=Adarsh+Vishwakarama&background=0F172A&color=fff" alt="Profile" width="40" height="40" class="rounded-circle border border-2 border-white shadow-sm">
                        <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle"></span>
                    </div>
                    <div class="d-none d-xl-block text-start lh-1 ms-1">
                        <span class="d-block fw-bold text-dark fs-6 mb-1">Adarsh</span>
                        <span class="d-block text-secondary fw-medium" style="font-size: 0.75rem;">Super Admin</span>
                    </div>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="text-secondary ms-1 fs-5"></iconify-icon>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-4 mt-3 p-2" style="min-width: 220px;">
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2 rounded-2 fw-medium text-dark" href="#"><iconify-icon icon="solar:user-bold-duotone" class="text-secondary fs-5"></iconify-icon> My Profile</a></li>
                    <li><hr class="dropdown-divider my-2 opacity-10"></li>
                    <li>
                        <!-- Logout Form inside Dropdown -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger rounded-2 fw-bold w-100 text-start border-0 bg-transparent">
                                <iconify-icon icon="solar:logout-2-bold-duotone" class="fs-5"></iconify-icon> Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header> --}}


<!-- Top Navbar (Enterprise Command Center Edition) -->
{{-- <header class="navbar navbar-expand-lg bg-white sticky-top shadow-sm border-bottom px-4 py-3" style="z-index: 1020;"> --}}
    <header class="navbar navbar-expand-lg bg-white shadow-sm border-bottom px-4 py-3 flex-shrink-0" style="z-index: 1020;">
    <div class="container-fluid p-0 d-flex justify-content-between align-items-center">

        <!-- Left Side: Toggle, Breadcrumbs & Environment -->
        <div class="d-flex align-items-center gap-3">
            <!-- Sidebar Toggle -->
            {{-- <div class="sidebar-toogle btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center icon-hover border-0 shadow-sm" style="cursor: pointer; width: 40px; height: 40px;">
                <iconify-icon icon="solar:hamburger-menu-linear" class="fs-5 text-dark"></iconify-icon>
            </div> --}}

            <!-- Breadcrumbs -->
            {{-- <nav aria-label="breadcrumb" class="d-none d-md-block mt-3 ms-2">
                <ol class="breadcrumb mb-0 fs-6">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary fw-medium hover-primary">imSphare Hub</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary fw-medium hover-primary">Core Admin</a></li>
                    <li class="breadcrumb-item active fw-bold text-dark" aria-current="page">Dashboard</li>
                </ol>
            </nav> --}}

            <!-- Active Environment Pill (Pro Feature) -->
            <div class="d-none d-xl-flex align-items-center gap-2 px-3 py-1 bg-success bg-opacity-10 border border-success border-opacity-25 rounded-pill ms-3">
                <span class="spinner-grow text-success" style="width: 6px; height: 6px;" role="status"></span>
                <span class="fw-bold text-success" style="font-size: 0.7rem; letter-spacing: 0.5px;">PRODUCTION_ASIA</span>
            </div>
        </div>

        <!-- Right Side: Search, Apps, Theme, Notifications, Profile -->
        <div class="d-flex align-items-center gap-2 gap-md-3">

            <!-- Global Command Palette (Search) -->
            <div class="position-relative d-none d-lg-block me-2">
                <iconify-icon icon="solar:magnifer-linear" class="position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></iconify-icon>
                <input type="text" class="form-control bg-light border-0 rounded-pill ps-5 pe-5 py-2 shadow-sm focus-ring focus-ring-primary" placeholder="Search users, logs, or APIs..." style="width: 300px; transition: all 0.3s;" onfocus="this.style.width='360px'" onblur="this.style.width='300px'">
                <div class="position-absolute top-50 end-0 translate-middle-y me-2 d-flex gap-1">
                    <span class="badge bg-white text-secondary border rounded px-2 py-1 shadow-sm" style="font-size: 0.65rem;">Ctrl</span>
                    <span class="badge bg-white text-secondary border rounded px-2 py-1 shadow-sm" style="font-size: 0.65rem;">K</span>
                </div>
            </div>

            <!-- Ecosystem App Switcher (Google Style 9-dots) -->
            <div class="dropdown">
                <button class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center text-secondary border-0 icon-hover" type="button" data-bs-toggle="dropdown" style="width: 42px; height: 42px;" title="Sphare Ecosystem">
                    <iconify-icon icon="solar:widget-3-bold-duotone" class="fs-4"></iconify-icon>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 p-3 mt-2" style="width: 320px;">
                    <div class="text-uppercase text-secondary fw-bold mb-3 px-2" style="font-size: 0.7rem; letter-spacing: 1px;">Sphare Ecosystem</div>
                    <div class="row g-2 text-center">
                        <!-- App 1 -->
                        <div class="col-4">
                            <a href="#" class="d-block p-2 rounded-3 text-decoration-none icon-hover transition-all">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-4 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 48px; height: 48px;">
                                    <iconify-icon icon="solar:user-id-bold-duotone" class="fs-3"></iconify-icon>
                                </div>
                                <span class="d-block text-dark fw-medium" style="font-size: 0.8rem;">imSphare</span>
                            </a>
                        </div>
                        <!-- App 2 -->
                        <div class="col-4">
                            <a href="#" class="d-block p-2 rounded-3 text-decoration-none icon-hover transition-all">
                                <div class="bg-success bg-opacity-10 text-success rounded-4 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 48px; height: 48px;">
                                    <iconify-icon icon="solar:document-text-bold-duotone" class="fs-3"></iconify-icon>
                                </div>
                                <span class="d-block text-dark fw-medium" style="font-size: 0.8rem;">Codex</span>
                            </a>
                        </div>
                        <!-- App 3 -->
                        <div class="col-4">
                            <a href="#" class="d-block p-2 rounded-3 text-decoration-none icon-hover transition-all">
                                <div class="bg-info bg-opacity-10 text-info rounded-4 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 48px; height: 48px;">
                                    <iconify-icon icon="solar:code-circle-bold-duotone" class="fs-3"></iconify-icon>
                                </div>
                                <span class="d-block text-dark fw-medium" style="font-size: 0.8rem;">Orbit</span>
                            </a>
                        </div>
                        <!-- App 4 -->
                        <div class="col-4">
                            <a href="#" class="d-block p-2 rounded-3 text-decoration-none icon-hover transition-all">
                                <div class="bg-warning bg-opacity-10 text-warning rounded-4 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 48px; height: 48px;">
                                    <iconify-icon icon="solar:letter-bold-duotone" class="fs-3"></iconify-icon>
                                </div>
                                <span class="d-block text-dark fw-medium" style="font-size: 0.8rem;">Mail</span>
                            </a>
                        </div>
                        <!-- App 5 -->
                        <div class="col-4">
                            <a href="#" class="d-block p-2 rounded-3 text-decoration-none icon-hover transition-all">
                                <div class="bg-danger bg-opacity-10 text-danger rounded-4 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 48px; height: 48px;">
                                    <iconify-icon icon="solar:shop-bold-duotone" class="fs-3"></iconify-icon>
                                </div>
                                <span class="d-block text-dark fw-medium" style="font-size: 0.8rem;">Mart</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Theme Toggle -->
            <button class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center text-secondary border-0 icon-hover" style="width: 42px; height: 42px;" onclick="toggleTheme()" title="Toggle Theme">
                <iconify-icon id="themeToggleIcon" icon="solar:moon-bold-duotone" class="fs-4"></iconify-icon>
            </button>

            <!-- Advanced Notifications Hub -->
            <div class="dropdown">
                <button class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center text-secondary border-0 position-relative icon-hover" type="button" data-bs-toggle="dropdown" style="width: 42px; height: 42px;">
                    <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-4"></iconify-icon>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-2 border-white rounded-circle"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 p-0 mt-2" style="width: 360px;">
                    <div class="p-3 border-bottom d-flex justify-content-between align-items-center bg-light rounded-top-4">
                        <span class="fw-bold fs-6">System Alerts</span>
                        <a href="#" class="text-primary text-decoration-none small fw-semibold">Mark all read</a>
                    </div>
                    <div class="list-group list-group-flush" style="max-height: 300px; overflow-y: auto;">
                        <a href="#" class="list-group-item list-group-item-action p-3 d-flex gap-3 align-items-start border-bottom-0">
                            <div class="text-danger bg-danger bg-opacity-10 p-2 rounded-circle d-flex align-items-center justify-content-center mt-1" style="width: 36px; height: 36px;">
                                <iconify-icon icon="solar:shield-warning-bold-duotone"></iconify-icon>
                            </div>
                            <div>
                                <p class="mb-1 fw-semibold text-dark fs-6 lh-sm">Sphare-Sentinel Alert</p>
                                <small class="text-secondary d-block">Multiple failed login attempts detected from IP 192.168.1.45.</small>
                                <small class="text-muted fw-bold mt-1 d-block" style="font-size: 0.7rem;">JUST NOW</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action p-3 d-flex gap-3 align-items-start border-bottom-0 bg-light bg-opacity-50">
                            <div class="text-success bg-success bg-opacity-10 p-2 rounded-circle d-flex align-items-center justify-content-center mt-1" style="width: 36px; height: 36px;">
                                <iconify-icon icon="solar:cloud-upload-bold-duotone"></iconify-icon>
                            </div>
                            <div>
                                <p class="mb-1 fw-semibold text-dark fs-6 lh-sm">Automated Backup</p>
                                <small class="text-secondary d-block">Database backup completed successfully (452 MB).</small>
                                <small class="text-muted fw-bold mt-1 d-block" style="font-size: 0.7rem;">2 HOURS AGO</small>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 text-center border-top">
                        <a href="#" class="text-primary text-decoration-none fw-semibold small">Go to Command Center &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="vr d-none d-md-flex text-secondary" style="opacity: 0.15; height: 35px; align-self: center; margin: 0 5px;"></div>

            <!-- Ultimate Profile Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light bg-transparent border-0 d-flex align-items-center gap-2 p-1 pe-3 rounded-pill shadow-sm hover-primary" type="button" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <!-- Custom Name Fetch -->
                        <img src="https://ui-avatars.com/api/?name={{ urlencode('Adarsh Vishwakarama') }}&background=0F172A&color=fff&rounded=true&bold=true" alt="Admin" width="40" height="40" class="rounded-circle border border-2 border-white shadow-sm">
                        <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle" title="System Online"></span>
                    </div>
                    <div class="d-none d-xl-block text-start lh-1 ms-1">
                        <span class="d-block fw-bold text-dark fs-6 mb-1">Adarsh</span>
                        <span class="badge bg-dark bg-opacity-10 text-dark rounded-pill fw-bold" style="font-size: 0.65rem;">OWNER</span>
                    </div>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="text-secondary ms-1 fs-5"></iconify-icon>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 mt-3 p-2" style="min-width: 260px;">
                    <!-- User Profile Card in Menu -->
                    <li class="px-3 py-3 mb-2 bg-light rounded-4 d-flex align-items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode('Adarsh Vishwakarama') }}&background=0F172A&color=fff" width="45" height="45" class="rounded-circle shadow-sm">
                        <div>
                            <span class="d-block fw-bold text-dark lh-sm">Adarsh Vishwakarama</span>
                            <span class="d-block text-secondary small mt-1">admin@sphare.com</span>
                        </div>
                    </li>

                    <li class="px-2 text-uppercase text-secondary fw-bold mt-3 mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">Account Controls</li>
                    <li><a class="dropdown-item d-flex align-items-center gap-3 py-2 rounded-3 fw-medium text-dark icon-hover" href="#"><iconify-icon icon="solar:user-id-bold-duotone" class="text-secondary fs-5"></iconify-icon> Profile Settings</a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-3 py-2 rounded-3 fw-medium text-dark icon-hover" href="#"><iconify-icon icon="solar:shield-keyhole-bold-duotone" class="text-secondary fs-5"></iconify-icon> Security & 2FA</a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-3 py-2 rounded-3 fw-medium text-dark icon-hover" href="#"><iconify-icon icon="solar:key-minimalistic-square-bold-duotone" class="text-secondary fs-5"></iconify-icon> Developer API Keys</a></li>

                    <li><hr class="dropdown-divider my-2 opacity-10"></li>

                    <li>
                        <!-- Actionable Logout Form -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center gap-3 py-2 text-danger rounded-3 fw-bold w-100 text-start border-0 bg-danger bg-opacity-10 mt-1 transition-all hover-danger">
                                <iconify-icon icon="solar:logout-2-bold-duotone" class="fs-5"></iconify-icon> Terminate Session
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>

<style>
    /* Premium utilities for Navbar */
    .hover-primary:hover { color: #4F46E5 !important; }
    .hover-danger:hover { background-color: #FEE2E2 !important; color: #B91C1C !important; }
    .focus-ring-primary:focus { box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25) !important; }
</style>
