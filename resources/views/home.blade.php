@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
            <br>
            <br>
            <h1 class="blue-text">Welcome to RatioCRM!</h1>
            <br>
            <h2>Setup your first Business!</h2>
            <br>
            <a href="{{ route('biz-setup') }}" class="btn btn-home btn-lg">Get Started</a>
        </div>
    </div>
</div>
@endsection