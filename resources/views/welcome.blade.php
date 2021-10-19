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
       <div class="container d-flex flex-row" aria-role="main">
            <div class="w-50 mt-lg-5">
                    <h1 class="heading">
                        Manage Customer Engagement
                    </h1>
                    <p class="lead main-par pr-5">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur vero, tempore suscipit quod dignissimos quasi eos ea ratione architecto ipsam quos numquam doloremque veniam nihil rem provident eveniet explicabo quam in perferendis accusamus debitis. Necessitatibus suscipit reiciendis quisquam itaque! Eum repudiandae eveniet placeat maxime nemo magni similique aliquam molestias facere repellendus laborum numquam facilis laudantium autem optio illum odit, exercitationem vero sequi commodi minus sed ab dolore delectus! Optio quos quas eveniet mollitia dolorem rerum!
                    </p>
                    <br>
                    <a href="" class="btn btn-body">Find out More</a>
            </div>
            <div class="w-50 mt-lg-5 ml-lg-5 d-flex justify-content-center align-items-center">
                    <form action="" class="form-group w-75 home-form">
                        <fieldset>
                        <legend class="form-title-text">Create an Account</legend>
                        <br>
                        <label for="firstname" class="form-label text-align-center">First Name</label>
                        <br>
                        <input type="text" class="form-control" placeholder="First Name">
                        <br>
                        <label for="lastname" class="form-label">Last Name</label>
                        <br>
                        <input type="text" class="form-control" placeholder="Last Name">
                        <br>
                        <label for="email" class="form-label">Email Address</label>
                        <br>
                        <input type="email" class="form-control" placeholder="Email Address">
                        <br>
                        <label for="password" class="form-label">Password</label>
                        <br>
                        <input type="password" class="form-control" placeholder="Password">
                        <br>
                        <button class="btn form-control form-btn">Create Account</button>
                        </fieldset>
                    </form>
            </div>
       </div>
    </body>
</html>
