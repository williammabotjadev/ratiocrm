@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $biz->name }}</h1>
                <h5 class="blue-text">Overview</h5>
                <br>
                <div class="container">
 
            <ul class="nav nav-tabs">
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu1">Customers</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu2">Suppliers</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu3">Products</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu4">Services</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu5">Transactions</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu6">Reporting</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#menu7"><span class="plus-sign"><strong>+</strong></span></a></li>
            </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            <br>
            <h3>Business Overview</h3>
            <p>An Overview of Recent Business activities</p>
            </div>
            <div id="menu1" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Customers</h3>
            <p>An Overview of Recent Customer Activity</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Customers Home</button>
            </div>
            </div>
            </div>
            <div id="menu2" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Supplliers</h3>
            <p>An Overview of Recent Supplier Activity</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Suppliers Home</button>
            </div>
            </div>
            </div>
            <div id="menu3" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Products</h3>
            <p>An Overview of Recent Products Activity</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Products Home</button>
            </div>
            </div>
            </div>
            <div id="menu4" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Services</h3>
            <p>An Overview of Recent Services Activity</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Services Home</button>
            </div>
            </div>
            </div>
            <div id="menu5" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Transactions</h3>
            <p>An Overview of Recent Transactions</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Transactions Home</button>
            </div>
            </div>
            </div>
            <div id="menu6" class="tab-pane fade">
            <br>
            <div class="d-flex">
            <div class="col">
            <h3>Reporting</h3>
            <p>An Overview of Recent Reports</p>
            </div>
            <div class="col">
                <button class="btn btn-home btn-home-tabs">Reporting Home</button>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection