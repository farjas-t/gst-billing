<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GST Billing</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- App css -->
    <link href="{{ asset('assets/css2/bootstrap-creative.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css2/app-creative.min.css') }}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{ asset('assets/css2/bootstrap-creative-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('assets/css2/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="{{ asset('assets/css2/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>

<body
    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuYEi3bkTdkpMd-yl3QkeKb8NR-8Wq2o83vo3bPMdvYjCF6VpvRNAGn20nYI6-iLHeGJU&usqp=CAU');background-size: cover;background-repeat: no-repeat;background-position: center;">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js2/vendor.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js2/app.min.js') }}"></script>

</body>

</html>
