@extends('layouts.biz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Employees</h5>
                <br>
            </div>
            <table>
            @if (count($employees) > 0)
                @foreach($employees as $employee)
                        <tr>
                            <td class="px-5"><h3><strong>{{ $employee->name }}</strong></h3></td>
                            <td class="px-5"><h3><strong>{{ $employee->citytown }}</strong></h3></td>
                            <td class="px-5">
                                <a href="{{ route('employee', ['id' => $employee->id]) }}" target="_blank" class="btn btn-home">View Employee</a>
                            </td>
                        </tr>
                @endforeach
            </table>
            @else 
            <h3 class="blue-text mt-5 mb-5">No Personnel Data Yet</h3>
            @endif
                <br>
            <a href="{{ route('new-employee', ['id' => $biz->id]) }}" class="btn btn-home-alt w-25 mb-lg-5">Add Employee</a>
                <br>
            <a href="{{ route('biz', ['id' => $biz->id]) }}" class="btn btn-home">Business Home</a>
    </div>
</div>
@endsection