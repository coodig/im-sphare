{{-- resources/views/errors/minimal.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name', 'IMSPhare') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Lexend Deca', sans-serif; }
    </style>
</head>
<body class="bg-body text-text-main antialiased min-h-screen flex flex-col justify-center items-center">

    <main class="p-6 text-center animate-fade">
        <div class="max-w-lg w-full">
            @yield('error-content')
        </div>
    </main>

    <footer class="fixed bottom-6 w-full text-center text-sm text-muted">
        &copy; {{ date('Y') }} IMSPhare. All rights reserved.
    </footer>

</body>
</html>
