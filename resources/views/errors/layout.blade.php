<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | IMSPhare</title>

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Lexend Deca', 'sans-serif'],
                    },
                    colors: {
                        primary: '#4F46E5', // Indigo-600
                        'primary-hover': '#4338ca',
                        body: '#0F172A',    // Slate-900 (Dark Background)
                        card: '#1E293B',    // Slate-800 (Card Background)
                        'text-main': '#F8FAFC', // Slate-50
                        muted: '#94A3B8',   // Slate-400
                        custom: '#334155',  // Slate-700 (Borders)
                    },
                    animation: {
                        'fade-up': 'fadeUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Lexend Deca', sans-serif; }

        /* Aurora Gradient Animation */
        .aurora-bg {
            background: linear-gradient(45deg, #4f46e5, #0ea5e9, #8b5cf6, #ec4899);
            background-size: 400% 400%;
            animation: aurora 15s ease infinite;
        }
        @keyframes aurora {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-body text-text-main antialiased h-screen overflow-hidden flex">

    <div class="w-full lg:w-[45%] h-full flex flex-col justify-center px-8 md:px-16 lg:px-24 bg-card border-r border-custom z-10 relative">

        <div class="absolute top-8 left-8 md:left-12 flex items-center gap-2">
            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-8 h-8">
            <span class="font-bold text-lg tracking-tight">IMSPhare</span>
        </div>

        <div class="animate-fade-up">
            <p class="font-bold text-primary tracking-widest uppercase mb-4 text-sm">Error @yield('code')</p>
            <h1 class="text-6xl md:text-7xl font-bold mb-6 text-text-main leading-tight">
                @yield('message')
            </h1>
            <p class="text-muted text-lg mb-10 leading-relaxed max-w-md">
                @yield('description')
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/') }}" class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/30 hover:bg-primary-hover hover:-translate-y-1 transition-all flex items-center gap-2">
                    <iconify-icon icon="solar:home-2-bold-duotone" class="text-xl"></iconify-icon>
                    Back Home
                </a>
                <button onclick="history.back()" class="px-8 py-3.5 rounded-full border border-custom bg-body text-text-main font-bold hover:bg-gray-100 dark:hover:bg-white/5 transition-all flex items-center gap-2">
                    <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
                    Go Back
                </button>
            </div>
        </div>

        <div class="absolute bottom-8 left-8 md:left-12 text-xs text-muted">
            &copy; {{ date('Y') }} IMSPhare. System Status: <span class="text-green-500 font-bold">● Stable</span>
        </div>
    </div>

    <div class="hidden lg:flex w-[55%] h-full aurora-bg items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10 backdrop-blur-[1px]"></div>

        <div class="relative z-10 w-96 h-96 bg-white/10 backdrop-blur-xl border border-white/20 rounded-[3rem] shadow-2xl flex items-center justify-center animate-float">
            <div class="text-white drop-shadow-lg">
                @yield('image')
            </div>
        </div>
    </div>

</body>
</html>
