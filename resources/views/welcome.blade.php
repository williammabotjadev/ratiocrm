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
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
       
    </head>
    <body class="antialiased home-body">
       <nav class="navbar navbar-expand-md home-nav">
            <a href="/" class="nav-item nav-link navbar-brand">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid navbar-brand img-logo">
            </a>
              
           <div class="nav-item">
               <a href="{{ route('register') }}" target="_self" class="btn btn-home">Get Started</a>
               <a href="{{ route('login') }}" target="_self" class="btn btn-home">Sign in</a>
           </div>
       </nav>
       <div class="container d-flex flex-row" aria-role="main">
            <div class="w-50 mt-lg-5">
                    <h1 class="heading" id="hero-heading">
                        Manage Customer Engagement
                    </h1>
                    <p class="lead main-par pr-5" id="main-par">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur vero, tempore suscipit quod dignissimos quasi eos ea ratione architecto ipsam quos numquam doloremque veniam nihil rem provident eveniet explicabo quam in perferendis accusamus debitis. Necessitatibus suscipit reiciendis quisquam itaque! Eum repudiandae eveniet placeat maxime nemo magni similique aliquam molestias facere repellendus laborum numquam facilis laudantium autem optio illum odit, exercitationem vero sequi commodi minus sed ab dolore delectus! Optio quos quas eveniet mollitia dolorem rerum!
                    </p>
                    
                    <br>
                    <div class="d-flex flex-row justify-content-around">
                        <a href="{{ route('features') }}" class="btn btn-body">Find out More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                                <span id="circle-one">
                                    &#9677;
                                </span>
                                <span class="circle-two">
                                    &#9711;
                                </span>
                                <span class="circle-three">
                                    &#9711;
                                </span>
                        </div>
                    </div>
                        
            </div>
            <div class="w-50 mt-lg-4 ml-lg-5 d-flex justify-content-center align-items-center">
        
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <legend>Create Account</legend>
                            <br>
                            <br>
                        <div class="form-group row d-flex flex-row align-items-center mt-lg-1">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-8">
                                <input id="firstname" type="text" placeholder="First Name" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br> 
                        <div class="form-group row d-flex flex-row align-items-center">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-8">
                                <input id="lastname" type="text" placeholder="Last Name" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row d-flex flex-row align-items-center">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row d-flex flex-row align-items-center">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row d-flex flex-row align-items-center">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control form-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </fieldset>
                    </form>
            </div>
       </div>
       <script src="{{ asset('js/slide.js') }}"></script>
    </body>
</html>
