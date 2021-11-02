@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-row justify-content-center align-items-center">
           <form action="{{ route('store-biz') }}" class="form-group" method="POST">
               @csrf
               <fieldset>
                   <legend>New Transaction</legend>
                   <br>
                   <br>
            <div class="d-flex flex-row">
            <div class="w-50 container">
               <label for="customer" class="form-label">Select Customer</label>
               <br>
               <select name="customer" id="customer" class="form-control" required>
                  @foreach($customers as $customer)
                        <option value="{{ $customer->name }}">{{$customer->name}}</option>
                  @endforeach
               </select>
               <br>
               <label for="rep" class="form-label">Sales Rep</label>
               <br>
               <select name="rep" id="rep" class="form-control" required>
                  @foreach($employees as $rep)
                        <option value="{{ $rep->firstname}} {{ $rep->lastname }}">{{$rep->firstname}} {{$rep->lastname}}</option>
                  @endforeach
               </select>
               <br>
               <label for="trans_type" class="form-label">Transaction Type</label>
               <br>
               <select name="trans_type" id="trans_type" class="form-control" required>
               @if(count($transaction_types))
                  @foreach($transactions as $trans_type)
                        <option value="{{ $trans_type->title}}">{{$trans_type->title}}</option>
                  @endforeach
               @else
                     <option value="new_tt"><a href="#">Create New Type</a></option>
               @endif
               </select>
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
               <label for="website" class="form-label">Company Website</label>
               <br>
               <input type="text" name="website" id="website" class="form-control" required>
               <br>
               <label for="contactfname" class="form-label">Contact First Name</label>
               <br>
               <input type="text" name="contactfname" id="contactfname" class="form-control" required>
               <br>
               <label for="contactlname" class="form-label">Contact Last Name</label>
               <br>
               <input type="text" name="contactlname" id="contactlname" class="form-control" required>
               <br>
               <label for="contactemail" class="form-label">Contact Email</label>
               <br>
               <input type="text" name="contactemail" id="contactemail" class="form-control" required>
               <br>
               <br>
               <div class="d-flex flex-row mt-2">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a href="{{ route('biz-transactions', ['id' => $biz->id]) }}" type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
              
               </div>
            </div>   
            </fieldset>
           </form>
        </div>
    </div>
</div>
@endsection