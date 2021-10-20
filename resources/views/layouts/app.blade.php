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
</head>
<body>
    <div id="app">
    <nav class="nav navbar layout-nav">
           <img src="{{ asset('img/white-logo.png') }}" alt="logo" class="img-fluid navbar-brand img-logo-nav">
           <div class="nav-item px-lg-5">
               <a href="{{ route('register') }}" target="_self" class="btn btn-home mr-lg-5 getstarted-btn">Get Started</a>
               <a href="{{ route('login') }}" target="_self" class="btn btn-home mr-lg-5 signin-btn">Sign in</a>
               <a href="{{ route('features') }}" target="_self" class="btn btn-home mr-lg-5 features-btn">Features</a>
           </div>
       </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
