<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app>
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
            background: white;
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
               @guest
                <a href="{{ route('register') }}" target="_self" class="btn btn-home">Get Started</a>
                <a href="{{ route('login') }}" target="_self" class="btn btn-home">Sign in</a>
               @endguest
               @auth
               <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="dropdown">
                    <a class="dropdown-toggle text-white settings-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Settings</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('edit-biz-contact', ['id' => $biz->id]) }}">Edit Contact</a></li>
                        <li><a class="dropdown-item" href="{{ route('edit-biz', ['id' => $biz->id]) }}">Edit Company</a></li>
                        <li><a class="dropdown-item" href="#">Customize Dashboards</a></li>
                    </ul>
                </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"  class="btn btn-home">Sign Out</button>
                    </form>
                </div>
                @endauth
           </div>
       </nav>
        <div class="py-4 layout-body">
            @yield('content')
        </div>
    </div>
</body>
</html>
