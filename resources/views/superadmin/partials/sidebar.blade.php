<div class="sidebar py-3 px-1" style="width:200px; min-height:100vh;">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.dashboard') ? 'active' : '' }}"
               href="{{ route('superadmin.dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.users') ? 'active' : '' }}"
               href="{{ route('superadmin.users') }}">Manage Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.maintenance.show') ? 'active' : '' }}"
               href="{{ route('superadmin.maintenance.show') }}">Maintenance</a>
        </li>
    </ul>
</div>
