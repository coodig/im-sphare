// 🌙 Theme Toggle with Local Storage
function toggleTheme() {
  document.body.classList.toggle("dark-theme");

  // Save preference
  if (document.body.classList.contains("dark-theme")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
}

// Apply theme on load
window.addEventListener("DOMContentLoaded", () => {
  // Apply saved theme
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-theme");
  }

  // Apply saved sidebar state
  const sidebar = document.querySelector('.sidebar');
  const mainWrapper = document.querySelector('.main-wrapper');
  const navbar = document.querySelector('.custom-navbar');
  const footer = document.querySelector('.footer');
  const toggleBtn = document.getElementById('toggleSidebar');

  if (localStorage.getItem('sidebar-collapsed') === 'true') {
    sidebar.classList.add('collapsed');
    mainWrapper.classList.add('collapsed');
    navbar.classList.add('collapsed');
    footer.classList.add('collapsed');
    toggleBtn.classList.add('rotate');
  }

  // Sidebar toggle click
  toggleBtn.addEventListener('click', function () {
    sidebar.classList.toggle('collapsed');
    mainWrapper.classList.toggle('collapsed');
    navbar.classList.toggle('collapsed');
    footer.classList.toggle('collapsed');
    this.classList.toggle('rotate');

    // Save sidebar state
    const isCollapsed = sidebar.classList.contains('collapsed');
    localStorage.setItem('sidebar-collapsed', isCollapsed);
  });
});
