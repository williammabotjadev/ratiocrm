@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-row justify-content-center align-items-center">
           <form action="{{ route('store-employee', ['id' => $biz->id]) }}" class="form-group" method="POST">
               @csrf
               <fieldset>
                   <legend>New Employee</legend>
                   <br>
                   <br>
            <div class="d-flex flex-row">
            <div class="w-50 container">
               <label for="firstname" class="form-label">First Name</label>
               <br>
               <input type="text" name="firstname" id="firstname" class="form-control" required>
               <br>
               <label for="lastname" class="form-label">Last Name</label>
               <br>
               <input type="text" name="lastname" id="lastname" class="form-control" required>
               <br>
               <label for="streetaddress" class="form-label">Street Address</label>
               <br>
               <input type="text" name="streetaddress" id="streetaddress" class="form-control" required>
               <br>
               <label for="surburb" class="form-label">Surburb</label>
               <br>
               <input type="text" name="surburb" id="surburb" class="form-control" required>
               <br>
               <label for="citytown" class="form-label">City/Town</label>
               <br>
               <input type="text" name="citytown" id="citytown" class="form-control px-5" required>
               <br>
            </div>
            <div class="w-50 container">
               <label for="zippostalcode" class="form-label">Zip/Postal Code</label>
               <br>
               <input type="text" name="zippostalcode" id="zippostalcode" class="form-control" required>
               <br>
               <label for="stateprovinceregion" class="form-label">State/Province/Region</label>
               <br>
               <input type="text" name="stateprovinceregion" id="stateprovinceregion" class="form-control" required>
               <br>
               <label for="country" class="form-label">Country</label>
               <br>
               <input type="text" name="country" id="country" class="form-control" required>
               <br>
               <label for="email" class="form-label">Email Address</label>
               <br>
               <input type="text" name="email" id="email" class="form-control" required>
               <br>
               <label for="contactno" class="form-label">Contact Number</label>
               <br>
               <input type="text" name="contactno" id="contactno" class="form-control px-5" required>
               <br>
            </div>
            <div class="w-50 container">
               <label for="password" class="form-label">Employee Password</label>
               <br>
               <input type="password" name="password" id="password" class="form-control" required>
               <br>
               <label for="linkedin_url" class="form-label">Linkedin Profile</label>
               <br>
               <input type="text" name="linkedin_url" id="linkedin_url" class="form-control">
               <br>
               <label for="facebook_url" class="form-label">Facebook Profile</label>
               <br>
               <input type="text" name="facebook_url" id="facebook_url" class="form-control">
               <br>
               <label for="employee_type" class="form-label">Employee Type</label>
               <br>
               <input type="text" name="employee_type" id="employee_type" class="form-control">
               <br>
               <br>
               <div class="d-flex flex-row mt-2">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a href="{{ route('biz-employees', ['id' => $biz->id]) }}" type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
              
               </div>
            </div>   
            </fieldset>
           </form>
        </div>
    </div>
</div>
@endsection