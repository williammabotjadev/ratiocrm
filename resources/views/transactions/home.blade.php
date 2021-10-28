@extends('layouts.biz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Overview</h5>
                <br>
            </div>
            @if (count($transactions) < 0)
                {{ $transactions }}
            @else 
                <h3 class="blue-text mt-5 mb-5">No Customer Data Yet</h3>
            @endif
            <br>
                <a href="{{ route('new-transaction', ['id' => $biz->id]) }}" class="btn btn-home-alt w-25 mb-lg-5">Add Customer</a>
            <br>
                <a href="{{ route('biz', ['id' => $biz->id]) }}" class="btn btn-home">Business Home</a>
    </div>
</div>
@endsection