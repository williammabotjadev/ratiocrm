@extends('layouts.app')

@section('content')
<div class="container">
  
           <form action="{{ route('store-service', ['id' => $biz->id]) }}" class="form-group" method="POST">
               @csrf
               <fieldset>
                   <legend>New Service</legend>
                   <br>
                   <br>
            
            <div class="d-flex flex-row justify-content-center">
              <div class="prod-left">  
               <label for="prodname" class="form-label">Service Name</label>
               <br>
               <input type="text" name="prodname" id="prodname" class="form-control" required>
               <br>
               <label for="prodsku" class="form-label">SKU Code</label>
               <br>
               <input type="text" name="prodsku" id="prodsku" class="form-control">
               <br>
               <label for="description" class="form-label">Service Description</label>
               <br>
               <textarea cols="10" rows="5" name="description" id="description" class="form-control" required>
               </textarea>
            </div>
            <div class="prod-right">
               <label for="servicetype" class="form-label">Service Type</label>
               <br>
               <input type="text" name="servicetype" id="servicetype" class="form-control">
               <br>
               <label for="servicecost" class="form-label">Service Cost</label>
               <br>
               <input type="number" name="servicecost" id="servicecost" class="form-control" required>
               <br>
               <label for="serviceprice" class="form-label">Service Price</label>
               <br>
               <input type="number" name="serviceprice" id="serviceprice" class="form-control" required>
               <br>
               <div class="d-flex flex-row">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a href="{{ route('biz-services', ['id' => $biz->id]) }}" type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
            </div>
            </div>
            </fieldset>
           </form>
</div>
@endsection