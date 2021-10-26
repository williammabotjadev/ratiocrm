@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <br>
                <div class="container">
 
            <ul class="nav nav-tabs">
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu1">Menu 1</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu2">Menu 2</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu3">Menu 3</a></li>
            </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            <br>
            <h3>HOME</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
            <br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
            <br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
            <br>
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection