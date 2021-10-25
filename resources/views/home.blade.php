@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if (count($businesses) > 0)
        <div class="container">
           <h1 class="blue-text">Your Businesses</h1>
           <br>
            <table class="table-borderless d-flex justify-content-between mt-lg-5">
               
                @foreach($businesses as $biz)
                    <tr>
                        <td class="px-5"><h3><strong>{{ $biz->name }}</strong></h3></td>
                        <td class="px-5"><h3><strong>{{ $biz->citytown }}</strong></h3></td>
                        <td class="px-5">
                            <a href="#" class="btn btn-home">Open</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="{{ route('biz-setup') }}" class="btn btn-home w-25 mt-lg-5">Add a Business</a>
        <form method="POST" action="{{ route('delete-all-biz') }}" class="container mt-lg-5">
            @csrf
            <button type="submit" class="btn btn-danger text-white">Delete All Businesses</button>
        </form>
    @else 
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
            <br>
            <br>
            <h1 class="blue-text">Welcome to RatioCRM!</h1>
            <br>
            <h2>Setup your first Business!</h2>
            <br>
            <a href="{{ route('biz-setup') }}" class="btn btn-home btn-lg">Get Started</a>
        </div>
    @endif
    </div>
</div>
@endsection