{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                @include('partials.sidebar')
            </div> --}}
            {{-- <div class="col-md-10 p-0 relative">1 --}}
                {{-- <div class="col-10 p-0">
                <div class="content">@yield('content')</div>
                <div class="footer">
                    @include('partials.footer')
                </div>
            </div>
        </div>
    </div>


</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body>
    @include('partials.navbar')

    <div class="layout">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>
        <div class="main-content">
            <div class="content">
                @yield('content')
            </div>
            <div class="footer">
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>
{{-- <a href="{{ asset('assets/js/script.js')}}"></a> --}}
<script src="{{ asset('asset/js/script.js')}}"></script>

</html>
