@extends('layouts.biz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Products</h5>
                <br>
            </div>
            <table>
            @if (count($products) > 0)
                @foreach($products as $product)
                        <tr>
                            <td class="px-5"><h5><strong>{{ $product->name }}</strong></h5></td>
                            <td class="px-5"><h5><strong>$ {{ $product->selling_price }}</strong></h5></td>
                            <td class="px-5">
                                <a href="{{ route('product', ['id' => $product->id]) }}" target="_blank" class="btn btn-home">View Product</a>
                            </td>
                        </tr>
                @endforeach
            </table>
            @else 
            <h3 class="blue-text mt-5 mb-5">No Product Data Yet</h3>
            @endif
            <br>
                <a href="{{ route('new-product', ['id' => $biz->id]) }}" class="btn btn-home-alt w-25 mb-lg-5">Add Product</a>
            <br>
                <a href="{{ route('biz', ['id' => $biz->id]) }}" class="btn btn-home">Business Home</a>
    </div>
</div>
@endsection