{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">
    <title>@yield('title', 'Super Admin Panel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/superadmin.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/theme.css')}}">
    <script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

</head>

<body>
    @include('superadmin.partials.navbar')

    <div class="wrapper">
        @include('superadmin.partials.sidebar')

        <div class="content">
            @yield('superadmin-content')
        </div>
    </div>

    @include('superadmin.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="{{asset('asset/js/script.js')}}"></script>
<script src="{{asset('asset/js/superadmin.js')}}"></script>
<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>

</html> --}}
{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperAdmin | imSphare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        /* Sirf Sidebar ko fix rakhne ke liye minimal CSS */
        .sidebar {
            width: 280px;
            height: 100vh;
            position: sticky;
            top: 0;
            overflow-y: auto;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #495057;
            border-radius: 10px;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="d-flex min-vh-100 bg-light">
    <aside class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
        <a href="#"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-secondary pb-3 w-100 gap-2">
            <iconify-icon icon="solar:planet-3-bold-duotone" class="text-primary fs-3"></iconify-icon>
            <span class="fs-5 fw-bold">imSphare Admin</span>
        </a>

        <ul class="nav nav-pills flex-column mb-auto mt-3 gap-1">
            <li class="nav-item text-uppercase text-secondary small fw-bold mt-2 mb-1 px-3">Core</li>

            <li class="nav-item">
                <a href="#" class="nav-link active d-flex align-items-center gap-2" aria-current="page">
                    <iconify-icon icon="solar:widget-5-bold-duotone" class="fs-5"></iconify-icon> Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-5"></iconify-icon> Manage
                    Users
                </a>
            </li>

            <li class="nav-item text-uppercase text-secondary small fw-bold mt-4 mb-1 px-3">Ecosystem</li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:database-bold-duotone" class="fs-5"></iconify-icon> Projects
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:link-circle-bold-duotone" class="fs-5"></iconify-icon> SSO Identities
                </a>
            </li>

            <li class="nav-item text-uppercase text-secondary small fw-bold mt-4 mb-1 px-3">System</li>
            <li>
                <a href="#" class="nav-link text-white d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:settings-bold-duotone" class="fs-5"></iconify-icon> Settings
                </a>
            </li>
        </ul>
    </aside>

    <div class="flex-grow-1 d-flex flex-column overflow-hidden">

        <header
            class="p-3 mb-4 border-bottom bg-white shadow-sm d-flex justify-content-between align-items-center sticky-top">
            <div class="w-25">
                <input type="search" class="form-control bg-light border-0" placeholder="Search..." aria-label="Search">
            </div>

            <div class="d-flex align-items-center gap-4">
                <a href="#" class="text-secondary position-relative">
                    <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-4"></iconify-icon>
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                </a>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=0D6EFD&color=fff" alt="Admin"
                            width="36" height="36" class="rounded-circle me-2">
                        <strong>SuperAdmin</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                        <li><a class="dropdown-item py-2" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item py-2 text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="container-fluid px-4 pb-4">
            @yield('superadmin-content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">
    <title>@yield('title', 'Super Admin Panel | imSphare')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconify for Premium Icons -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/superadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>

    <style>
        /* Sidebar Fixes */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #495057;
            border-radius: 10px;
        }

        .nav-link.text-white:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .icon-hover:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="bg-light" style="height: 100vh; overflow: hidden;">

    <!-- Flex Wrapper for Sidebar and Content -->
    <div class="d-flex h-100 w-100">

        <!-- Sidebar Partial -->
        @include('superadmin.partials.sidebar')

        <!-- Main Content Area -->
        <div class="flex-grow-1 d-flex flex-column" style="height: 100vh; overflow: hidden;">

            <!-- Navbar Partial -->
            @include('superadmin.partials.navbar')

            <div class="flex-grow-1 overflow-auto d-flex flex-column position-relative">

                <!-- Dynamic Content -->
                <main class="container-fluid px-4 pb-4 pt-3 flex-grow-1">
                    @yield('superadmin-content')
                </main>

                <!-- Footer Partial -->
                @include('superadmin.partials.footer')
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script src="{{ asset('asset/js/superadmin.js') }}"></script>

    <!-- Page Specific Scripts -->
    @yield('scripts')
</body>

</html>
