<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Lexend Deca', 'sans-serif'], },
                    colors: {
                        primary: '#0071e3',
                        body: '#f5f5f7',
                        'body-dark': '#050505',
                        'text-main': '#1d1d1f',
                        'text-dark': '#f5f5f7',
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'cursor': 'cursor .75s step-end infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        cursor: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0' },
                        }
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .bg-grid {
                background-size: 40px 40px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                                  linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            }
            .dark .bg-grid {
                background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                                  linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            }
            .glass-card {
                @apply bg-white/40 dark:bg-white/5 backdrop-blur-xl border border-white/20 dark:border-white/10 shadow-xl;
            }
        }
    </style>
</head>

<body class="h-screen w-full flex items-center justify-center relative overflow-hidden bg-body dark:bg-body-dark text-text-main dark:text-text-dark transition-colors duration-500">

    <button onclick="toggleTheme()" class="absolute top-6 right-6 p-3 rounded-full glass-card hover:bg-white/60 dark:hover:bg-white/10 transition-all z-50">
        <iconify-icon id="themeIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition" width="24"></iconify-icon>
    </button>

    <div class="absolute inset-0 w-full h-full bg-grid z-0"></div>
    <div class="absolute inset-0 flex items-center justify-center -z-10">
        <div class="w-96 h-96 bg-primary/30 rounded-full mix-blend-multiply filter blur-[128px] animate-blob"></div>
        <div class="w-96 h-96 bg-purple-500/30 rounded-full mix-blend-multiply filter blur-[128px] animate-blob animation-delay-2000 ml-20"></div>
    </div>

    <div class="relative z-10 w-full max-w-3xl px-6 flex flex-col items-center text-center">

        <div class="mb-8 p-4 glass-card rounded-3xl animate-fade-in-up">
            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-16 h-16 drop-shadow-lg">
        </div>

        <div class="mb-10 space-y-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-widest uppercase mb-4">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Coming Soon
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight tracking-tight">
                We are building <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-purple-500 to-pink-500" id="typewriter"></span><span class="animate-cursor text-primary">|</span>
            </h1>

            <p class="text-lg md:text-xl text-muted/80 max-w-xl mx-auto font-light">
                The ultimate platform for developers to showcase, connect, and grow. Join the waitlist for early access.
            </p>
        </div>

        <div class="w-full max-w-md relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-primary to-purple-600 rounded-full blur opacity-20 group-hover:opacity-60 transition duration-1000"></div>

            <form action="#" class="relative flex items-center p-1.5 glass-card rounded-full transition-all focus-within:ring-2 focus-within:ring-primary/50">
                <div class="pl-4 text-muted">
                    <iconify-icon icon="solar:letter-bold-duotone" width="24"></iconify-icon>
                </div>
                <input type="email" placeholder="dev@example.com" required
                    class="w-full bg-transparent border-none outline-none px-4 py-3 placeholder-muted/60 font-medium text-lg">
                <button type="button" class="bg-text-main dark:bg-white text-body dark:text-black hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:text-white px-8 py-3 rounded-full font-bold transition-all duration-300 shadow-lg hover:shadow-primary/25 transform hover:scale-105">
                    Notify Me
                </button>
            </form>
        </div>

        <div class="mt-8 flex items-center gap-4 animate-fade-in opacity-80">
            <div class="flex -space-x-3">
                <img class="w-8 h-8 rounded-full border-2 border-white dark:border-black" src="https://i.pravatar.cc/100?img=1" alt="">
                <img class="w-8 h-8 rounded-full border-2 border-white dark:border-black" src="https://i.pravatar.cc/100?img=2" alt="">
                <img class="w-8 h-8 rounded-full border-2 border-white dark:border-black" src="https://i.pravatar.cc/100?img=3" alt="">
                <div class="w-8 h-8 rounded-full border-2 border-white dark:border-black bg-gray-200 dark:bg-gray-800 flex items-center justify-center text-xs font-bold text-muted">+2k</div>
            </div>
            <p class="text-sm font-medium text-muted">Joined by 2,000+ developers</p>
        </div>

        <div class="mt-16 flex items-center gap-6 text-sm font-medium text-muted/60">
            <a href="{{ route('landing.show') }}" class="hover:text-primary transition-colors">Home</a>
            <span>&bull;</span>
            <a href="mailto:support@imsphare.com" class="hover:text-primary transition-colors">Contact</a>
            <span>&bull;</span>
            <span>&copy; {{ date('Y') }} IMSPhare</span>
        </div>

    </div>

    <script>
        // Theme Toggle Logic
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            const icon = document.getElementById('themeIcon');
            // Logic to switch icon if needed, though loop transition handles animation
        }

        // Typewriter Effect
        const words = ["the Future.", "Connections.", "Portfolios.", "Opportunities."];
        let i = 0;
        let timer;

        function typingEffect() {
            let word = words[i].split("");
            var loopTyping = function () {
                if (word.length > 0) {
                    document.getElementById('typewriter').innerHTML += word.shift();
                } else {
                    setTimeout(deletingEffect, 2000);
                    return false;
                }
                timer = setTimeout(loopTyping, 100);
            };
            loopTyping();
        }

        function deletingEffect() {
            let word = words[i].split("");
            var loopDeleting = function () {
                if (word.length > 0) {
                    word.pop();
                    document.getElementById('typewriter').innerHTML = word.join("");
                } else {
                    if (words.length > (i + 1)) { i++; } else { i = 0; }
                    typingEffect();
                    return false;
                }
                timer = setTimeout(loopDeleting, 50);
            };
            loopDeleting();
        }

        document.addEventListener('DOMContentLoaded', typingEffect);
    </script>
</body>
</html>
