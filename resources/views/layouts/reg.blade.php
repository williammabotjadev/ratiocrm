<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- App Icons -->
    <link rel="icon shortcut-icon" href="{{ asset('img/icon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('../img/blue-bg.png') no-repeat;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="layout-body">
    <nav class="navbar navbar-expand-md layout-nav">
            <a href="/" class="nav-item nav-link navbar-brand">
                <img src="{{ asset('img/white-logo.png') }}" alt="logo" class="img-fluid navbar-brand img-logo-nav">
            </a>
              
           <div class="nav-item">
               <a href="{{ route('register') }}" target="_self" class="btn btn-home">Get Started</a>
               <a href="{{ route('login') }}" target="_self" class="btn btn-home">Sign in</a>
           </div>
       </nav>
        <div class="py-4 layout-body">
            @yield('content')
        </div>
    </div>
</body>
</html>
