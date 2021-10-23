@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-row justify-content-center align-items-center">
           <form action="" class="form-group" method="POST">
               <fieldset>
                   <legend>Setup Your Business</legend>
                   <br>
                   <br>
            <div class="d-flex flex-row">
            <div class="w-50 container">
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
               <label for="surburb" class="form-label">Surburb</label>
               <br>
               <input type="text" name="surburb" id="surburb" class="form-control">
               <br>
               <label for="citytown" class="form-label">City/Town</label>
               <br>
               <input type="text" name="citytown" id="citytown" class="form-control px-5">
               <br>
            </div>
            <div class="w-50 container">
               <label for="zippostalcode" class="form-label">Zip/Postal Code</label>
               <br>
               <input type="text" name="zippostalcode" id="zippostalcode" class="form-control">
               <br>
               <label for="stateprovinceregion" class="form-label">State/Province/Region</label>
               <br>
               <input type="text" name="stateprovinceregion" id="stateprovinceregion" class="form-control">
               <br>
               <label for="country" class="form-label">Country</label>
               <br>
               <input type="text" name="country" id="country" class="form-control">
               <br>
               <label for="email" class="form-label">Email Address</label>
               <br>
               <input type="text" name="email" id="email" class="form-control">
               <br>
               <label for="contactno" class="form-label">Contact Number</label>
               <br>
               <input type="text" name="contactno" id="contactno" class="form-control px-5">
               <br>
            </div>
            <div class="w-50 container">
               <label for="website" class="form-label">Company Website</label>
               <br>
               <input type="text" name="website" id="website" class="form-control">
               <br>
               <label for="contactfname" class="form-label">Contact First Name</label>
               <br>
               <input type="text" name="contactfname" id="contactfname" class="form-control">
               <br>
               <label for="contactlname" class="form-label">Contact Last Name</label>
               <br>
               <input type="text" name="contactlname" id="contactlname" class="form-control">
               <br>
               <label for="contactemail" class="form-label">Contact Email</label>
               <br>
               <input type="text" name="contactemail" id="contactemail" class="form-control">
               <br>
               <br>
               <div class="d-flex flex-row mt-2">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
              
               </div>
            </div>   
            </fieldset>
           </form>
        </div>
    </div>
</div>
@endsection