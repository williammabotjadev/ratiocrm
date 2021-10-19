<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RatioCRM - A Modern CRM for Modern Business</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- App Icons -->
        <link rel="icon shortcut-icon" href="{{ asset('img/icon.png') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
    </head>
    <body class="antialiased home-body">
       <nav class="nav navbar home-nav">
           <img src="{{ asset('img/logo.png') }}" alt="logo" class="responsive-img img-logo">
           <div class="nav-item px-lg-5">
               <a href="" class="btn btn-home mr-lg-5 getstarted-btn">Get Started</a>
               <a href="" class="btn btn-home mr-lg-5 signin-btn">Sign in</a>
               <a href="" class="btn btn-home mr-lg-5 features-btn">Features</a>
           </div>
       </nav>
    </body>
</html>
