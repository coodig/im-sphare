<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/github.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/layout.css') }}"> --}}

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
</head>

<body>
    {{-- @include('partials.navbar')

    <div class="layout">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>
        <div class="main-wrapper">
            <div class="main-content">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <div class="footer">
                @include('partials.footer')
            </div>
        </div>
    </div> --}}
    <div class="layout">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>

        <div class="main-wrapper">
            @include('partials.navbar')

            <div class="main-content">
                @yield('content')
            </div>

            @auth

            <div class="footer">
                @include('partials.footer')
            </div>
            @endauth
        </div>
    </div>

</body>
{{-- <a href="{{ asset('assets/js/script.js')}}"></a> --}}
<script src="{{ asset('asset/js/script.js')}}"></script>

</html>
