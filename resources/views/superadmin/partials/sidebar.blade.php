{{-- <div class="sidebar py-3 px-1" style="width:200px; min-height:100vh;">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.dashboard') ? 'active' : '' }}"
                href="{{ route('superadmin.dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.users.list') ? 'active' : '' }}"
                href="{{ route('superadmin.users.list') }}">Manage Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('superadmin.maintenance.show') ? 'active' : '' }}"
                href="{{ route('superadmin.maintenance.show') }}">Maintenance</a>
        </li>
    </ul>
</div> --}}
{{--
<aside class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
    style="width: 260px; height: 100vh; position: sticky; top: 0;">
    <a href="https://imsphare.oranbyte.com" target="_blank"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-secondary pb-3 w-100 gap-2">
        <iconify-icon icon="solar:planet-3-bold-duotone" class="text-primary fs-3"></iconify-icon>
        <span class="fs-5 fw-bold">imSphare Admin</span>
    </a>

    <ul class="nav nav-pills flex-column mb-auto mt-3 gap-1">
        <li class="nav-item text-uppercase text-secondary small fw-bold mt-2 mb-1 px-3">Core Menu</li>

        <li class="nav-item">
            <a href="{{ route('superadmin.dashboard') }}"
                class="nav-link {{ request()->routeIs('superadmin.dashboard') ? 'active' : 'text-white' }} d-flex align-items-center gap-2">
                <iconify-icon icon="solar:widget-5-bold-duotone" class="fs-5"></iconify-icon> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('superadmin.users.list') }}"
                class="nav-link {{ request()->routeIs('superadmin.users.list') ? 'active' : 'text-white' }} d-flex align-items-center gap-2">
                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-5"></iconify-icon> Manage
                Users
            </a>
        </li>

        <li class="nav-item text-uppercase text-secondary small fw-bold mt-4 mb-1 px-3">System</li>
        <li>
            <a href="{{ route('superadmin.maintenance.show') }}"
                class="nav-link {{ request()->routeIs('superadmin.maintenance.show') ? 'active' : 'text-white' }} d-flex align-items-center gap-2">
                <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-5"></iconify-icon> Maintenance
            </a>
        </li>
    </ul>
</aside> --}}


<aside class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark shadow-lg sidebar-scroll"
    style="width: 280px; height: 100%; overflow-y: auto; overflow-x: hidden ; z-index: 1030;">

    <!-- Brand Logo -->
    {{-- <div
        class="sidebar-toogle btn p-2 d-flex align-items-center justify-content-center icon-hover border-0 shadow-sm"
        style="cursor: pointer; width: 40px; height: 40px;">
        <iconify-icon icon="solar:hamburger-menu-linear" class="fs-5 text-dark"></iconify-icon>
    </div>
    --}}
   <div class="d-flex align-items-center gap-3 border-bottom border-secondary pb-3 w-100">

    <div class="sidebar-toogle btn p-2 d-flex align-items-center justify-content-center border-0 shadow-none transition-all bg-white bg-opacity-10 icon-hover"
        style="cursor: pointer; width: 40px; height: 40px; border-radius: 10px;">
        <iconify-icon icon="solar:hamburger-menu-broken" class="fs-4 text-white"></iconify-icon>
    </div>

    <div>
        <a href="https://imsphare.oranbyte.com" target="_blank"
            class="d-flex align-items-center text-white text-decoration-none flex-shrink-0">
            <div class="d-flex flex-column justify-content-center">
                <span class="fs-5 fw-bold lh-1 mb-1">IMSphare</span>
                <span class="text-secondary fw-medium" style="font-size: 0.65rem; letter-spacing: 1px;">SUPERADMIN CONSOLE</span>
            </div>
        </a>
    </div>

</div>

    <ul class="nav nav-pills flex-column mb-auto mt-3 gap-1">

        <!-- ================= ANALYTICS ================= -->
        <li class="nav-item text-uppercase text-secondary fw-bold mt-2 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">Analytics & Reports</li>
        <li class="nav-item">
            <a href="{{ route('superadmin.dashboard') }}"
                class="nav-link {{ request()->routeIs('superadmin.dashboard') ? 'active bg-primary' : 'text-white icon-hover' }} d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:pie-chart-2-bold-duotone" class="fs-5"></iconify-icon> Platform Overview
            </a>
        </li>
        {{-- <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:graph-up-bold-duotone" class="fs-5"></iconify-icon> Traffic & Usage
            </a>
        </li> --}}

        <!-- ================= CORE ADMIN ================= -->
        <li class="nav-item text-uppercase text-secondary fw-bold mt-4 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">Core Administration</li>
        <li>
            <a href="{{ route('superadmin.users.list') }}"
                class="nav-link {{ request()->routeIs('superadmin.users.list') ? 'active bg-primary' : 'text-white icon-hover' }} d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-5"></iconify-icon> Manage
                Users
            </a>
        </li>
        {{-- <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center justify-content-between py-2 rounded-3 transition-all">
                <div class="d-flex align-items-center gap-3">
                    <iconify-icon icon="solar:shield-keyhole-bold-duotone" class="fs-5"></iconify-icon> Roles & Access
                </div>
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:wallet-money-bold-duotone" class="fs-5"></iconify-icon> Billing &
                Subscriptions
            </a>
        </li> --}}

        <!-- ================= SPHARE ECOSYSTEM ================= -->
        <li class="nav-item text-uppercase text-secondary fw-bold mt-4 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">Sphare Ecosystem</li>
        <li>
            <a href="https://sphare-codex.oranbyte.com/"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:user-id-bold-duotone" class="fs-5"></iconify-icon> Sphare Codex
            </a>
        </li>
        {{-- <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:document-text-bold-duotone" class="fs-5"></iconify-icon> Sphare Codex Docs
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:letter-bold-duotone" class="fs-5"></iconify-icon> Sphare Mail
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:shop-bold-duotone" class="fs-5"></iconify-icon> Sphare Mart
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:cloud-storage-bold-duotone" class="fs-5"></iconify-icon> Sphare Air
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center justify-content-between py-2 rounded-3 transition-all">
                <div class="d-flex align-items-center gap-3">
                    <iconify-icon icon="solar:code-circle-bold-duotone" class="fs-5"></iconify-icon> Orbit Language Hub
                </div>
                <span class="badge bg-primary-subtle text-primary rounded-pill" style="font-size: 0.65rem;">BETA</span>
            </a>
        </li> --}}

        <!-- ================= DEVELOPER & API ================= -->
        {{-- <li class="nav-item text-uppercase text-secondary fw-bold mt-4 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">Developer Hub</li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:link-circle-bold-duotone" class="fs-5"></iconify-icon> SSO OAuth Clients
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:key-minimalistic-square-bold-duotone" class="fs-5"></iconify-icon> API Keys &
                Webhooks
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:plug-circle-bold-duotone" class="fs-5"></iconify-icon> App Integrations
            </a>
        </li> --}}

        <!-- ================= SECURITY & LOGS ================= -->
        {{-- <li class="nav-item text-uppercase text-secondary fw-bold mt-4 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">Security & Logs</li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:shield-warning-bold-duotone" class="fs-5 text-warning"></iconify-icon>
                Sphare-Sentinel
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:history-bold-duotone" class="fs-5"></iconify-icon> Audit Trails
            </a>
        </li> --}}

        <!-- ================= SYSTEM & INFRA ================= -->
        <li class="nav-item text-uppercase text-secondary fw-bold mt-4 mb-1 px-3"
            style="font-size: 0.7rem; letter-spacing: 1px;">System Controls</li>
        <li>
            <a href="{{ route('superadmin.maintenance.show') }}"
                class="nav-link {{ request()->routeIs('superadmin.maintenance.show') ? 'active bg-primary' : 'text-white icon-hover' }} d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-5 text-danger"></iconify-icon>
                Maintenance Mode
            </a>
        </li>
        {{-- <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:server-square-bold-duotone" class="fs-5"></iconify-icon> Environment Config
            </a>
        </li>
        <li>
            <a href="#"
                class="nav-link text-white icon-hover d-flex align-items-center gap-3 py-2 rounded-3 transition-all">
                <iconify-icon icon="solar:database-bold-duotone" class="fs-5"></iconify-icon> Database Backups
            </a>
        </li> --}}

    </ul>

    <!-- Sidebar Footer Profile Mini -->
    <div class="mt-4 pt-4 pb-2 flex-shrink-0">
        <div class="d-flex align-items-center gap-3 px-3 py-2 bg-secondary bg-opacity-10 rounded-4">
            <div class="position-relative">
                <div class="spinner-grow spinner-grow-sm text-success position-absolute top-0 end-0" role="status"
                    style="width: 8px; height: 8px; margin-top: -2px; margin-right: -2px;"></div>
                <iconify-icon icon="solar:server-path-bold-duotone" class="fs-3 text-white"></iconify-icon>
            </div>
            <div class="d-flex flex-column lh-1">
                <span class="text-white fw-bold fs-6">System Status</span>
                <span class="text-success fw-medium mt-1" style="font-size: 0.75rem;">All services operational</span>
            </div>
        </div>
    </div>
</aside>

<style>
    /* Add this transition to make hover effects buttery smooth */
    .transition-all {
        transition: all 0.2s ease-in-out;
    }

    .icon-hover:hover {
        background-color: rgba(255, 255, 255, 0.08) !important;
        transform: translateX(4px);
    }
</style>
