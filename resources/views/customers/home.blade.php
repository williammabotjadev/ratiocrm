@extends('layouts.biz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Customers</h5>
                <br>
            </div>
            <table>
            @if (count($customers) > 0)
                @foreach($customers as $customer)
                        <tr>
                            <td class="px-5"><h3><strong>{{ $customer->name }}</strong></h3></td>
                            <td class="px-5"><h3><strong>{{ $customer->citytown }}</strong></h3></td>
                            <td class="px-5">
                                <a href="{{ route('customer', ['id' => $customer->id]) }}" target="_blank" class="btn btn-home">View Customer</a>
                            </td>
                        </tr>
                @endforeach
            </table>
            @else 
                <h3 class="blue-text mt-5 mb-5">No Customer Data Yet</h3>
            @endif
            <br>
                <a href="{{ route('new-customer', ['id' => $biz->id]) }}" class="btn btn-home-alt w-25 mb-lg-5">Add Customer</a>
            <br>
                <a href="{{ route('biz', ['id' => $biz->id]) }}" class="btn btn-home">Business Home</a>
    </div>
</div>
@endsection