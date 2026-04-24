<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/readme.css') }}">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Lexend Deca', 'sans-serif'], },
                    colors: {
                        primary: 'var(--primary-color)', 'primary-hover': 'var(--btn-primary-hover)',
                        body: 'var(--bg-color)', card: 'var(--card-bg)',
                        sidebar: 'var(--sidebar-bg)', navbar: 'var(--navbar-bg)',
                        'text-main': 'var(--text-color)', muted: 'var(--muted-text)',
                        custom: 'var(--border-color)', footer: 'var(--footer-bg)',
                    },
                    boxShadow: {
                        'apple': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            :root {
                --primary-color: #0071e3; --btn-primary-hover: #0077ed;
                --bg-color: #f5f5f7; --card-bg: #ffffff;
                --sidebar-bg: #ffffff; --navbar-bg: rgba(255, 255, 255, 0.9);
                --text-color: #1d1d1f; --muted-text: #86868b;
                --border-color: #d2d2d7; --footer-bg: #f5f5f7;
            }
            .dark-theme {
                --primary-color: #2997ff; --btn-primary-hover: #0071e3;
                --bg-color: #000000; --card-bg: #1c1c1e;
                --sidebar-bg: #1c1c1e; --navbar-bg: rgba(28, 28, 30, 0.9);
                --text-color: #828282; --muted-text: #86868b;
                --border-color: #424245; --footer-bg: #151516;
            }
            body {
                @apply bg-body text-text-main transition-colors duration-500 font-sans antialiased;
            }

            ::-webkit-scrollbar { width: 8px; height: 8px; }
            ::-webkit-scrollbar-track { background: transparent; }
            ::-webkit-scrollbar-thumb { @apply bg-gray-300 dark:bg-gray-700 rounded-full; }
            ::-webkit-scrollbar-thumb:hover { @apply bg-primary; }
        }
    </style>
</head>

<body class="overflow-hidden h-screen w-full flex text-sm md:text-base">

    {{-- --text-color: #f5f5f7; --muted-text: #86868b; --}}
    <aside class="w-64 h-full bg-sidebar border-r border-custom hidden lg:flex flex-col transition-colors duration-500 z-20">
        @include('partials.sidebar')
    </aside>

    <div class="flex-1 flex flex-col h-full relative min-w-0">

        <header class="h-[60px] md:h-[70px] w-full bg-navbar backdrop-blur-md border-b border-custom z-10 shrink-0">
            @include('partials.navbar')
        </header>

        <main class="flex-1 overflow-y-auto overflow-x-hidden p-4 md:p-8 scroll-smooth relative">
            @yield('content')
        </main>

        <footer class="bg-body border-t border-custom p-4 text-center text-xs text-muted shrink-0">

            @include('partials.footer')
        </footer>
    </div>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
            localStorage.setItem('theme', document.body.classList.contains('dark-theme') ? 'dark' : 'light');
        }
    </script>

    <script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('asset/js/script.js')}}"></script>
    <script src="{{ asset('asset/js/img-preview.js')}}"></script>

    @yield('scripts')

</body>
</html>
