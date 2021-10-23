@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
           <form action="" class="form-group" method="POST">
               <label for="businessname" class="form-label">Business Name</label>
               <br>
               <input type="text" name="businessname" id="businessname" class="form-control">
               <br>
               <label for="regno" class="form-label">Registration Number</label>
               <br>
               <input type="text" name="regno" id="regno" class="form-control">
               <br>
               <label for="streetaddress" class="form-label">Street Address</label>
               <br>
               <input type="text" name="streetaddress" id="streetaddress" class="form-control">
               <br>
               <label for="surburb" class="form-control">Surburb</label>
               <br>
               <input type="text" name="surburb" id="surburb" class="form-control">
               <br>
               <label for="citytown" class="form-label">City/Town</label>
               <br>
               <input type="text" name="citytown" id="citytown" class="form-control">
               <br>
               <label for="" class="form-label"></label>
           </form>
        </div>
    </div>
</div>
@endsection