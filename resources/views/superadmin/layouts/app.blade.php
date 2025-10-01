<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">
    <title>@yield('title', 'Super Admin Panel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/superadmin.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/theme.css')}}">
    <script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

</head>

<body>
    @include('superadmin.partials.navbar')

    <div class="wrapper">
        @include('superadmin.partials.sidebar')

        <div class="content">
            @yield('superadmin-content')
        </div>
    </div>

    @include('superadmin.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="{{asset('asset/js/script.js')}}"></script>
<script src="{{asset('asset/js/superadmin.js')}}"></script>
<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>

</html>
