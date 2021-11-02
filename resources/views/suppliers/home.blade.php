@extends('layouts.biz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Suppliers</h5>
                <br>
            </div>
            <table>
            @if (count($suppliers) > 0)
                    @foreach($suppliers as $supplier)
                                <tr>
                                    <td class="px-5"><h3><strong>{{ $supplier->name }}</strong></h3></td>
                                    <td class="px-5"><h3><strong>{{ $supplier->citytown }}</strong></h3></td>
                                    <td class="px-5">
                                        <a href="{{ route('supplier', ['id' => $supplier->id]) }}" target="_blank" class="btn btn-home">View Supplier</a>
                                    </td>
                                </tr>
                    @endforeach
            </table>
            @else 
                <h3 class="blue-text mt-5 mb-5">No Supplier Data Yet</h3>
            @endif
            <br>
                <a href="{{ route('new-supplier', ['id' => $biz->id]) }}" class="btn btn-home-alt w-25 mb-lg-5">Add Supplier</a>
            <br>
                <a href="{{ route('biz', ['id' => $biz->id]) }}" class="btn btn-home">Business Home</a>
    </div>
</div>
@endsection