
<div class="sidebar-content">
    <div class="sidebar-top">
        <button id="toggleSidebar" class="collapse-toggle">
  <iconify-icon icon="line-md:menu-fold-left"></iconify-icon>
</button>
        <a href="/"><iconify-icon icon="solar:home-2-bold-duotone"></iconify-icon>
        <span class="sidebar-text">Home</span></a>

        <a href="{{ route('dashboard.show') }}"><iconify-icon icon="duo-icons:dashboard"></iconify-icon>
        <span class="sidebar-text">Dashboard</span></a>

        <a href="{{ route('repos.index') }}"><iconify-icon icon="solar:folder-with-files-bold-duotone"></iconify-icon>
        <span class="sidebar-text">Projects</span></a>

        <a href="{{ route('contact.show') }}"><iconify-icon icon="solar:phone-calling-rounded-bold-duotone"></iconify-icon>
        <span class="sidebar-text">Contact Us</span></a>

         <a href="{{ route('about.show') }}"><iconify-icon icon="solar:info-circle-bold-duotone"></iconify-icon>
        <span class="sidebar-text">About</span></a>
    </div>

    <div class="sidebar-bottom">
        <a href="{{ route('settings.show') }}"><iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
        <span class="sidebar-text">Setting</span></a>

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn red">
                    <iconify-icon icon="line-md:log-out"></iconify-icon>
                    <span class="sidebar-text">Logout</span>
                </button>
            </form>
        @endauth
    </div>
</div>
