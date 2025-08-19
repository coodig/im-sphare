<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="{{ route('superadmin.dashboard') }}">Dashboard</a></li>
            {{-- <li><a href="{{ route('superadmin.users') }}">Manage Users</a></li> --}}
            {{-- <li><a href="{{ route('superadmin.reports') }}">Reports</a></li> --}}
            {{-- <li><a href="{{ route('superadmin.settings') }}">Settings</a></li> --}}
            {{-- <li><a href="{{ route('superadmin.profile') }}">Profile</a></li> --}}
            {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
