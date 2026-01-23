<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | {{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/theme.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/github.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/follower.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/gallery.css') }}">


    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="layout">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>

        <div class="main-wrapper">
            @include('partials.navbar')

            <div class="main-content" style="position: relative">
                @yield('content')
                @yield('scripts')

            </div>
            {{-- @include('partials.chat-us') --}}

            <div class="footer">
                @include('partials.footer')
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('asset/js/script.js')}}"></script>
<script src="{{ asset('asset/js/github.js')}}"></script>
<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('asset/js/profile.js')}}"></script>
<script src="{{ asset('asset/js/img-preview.js')}}"></script>

</html>
