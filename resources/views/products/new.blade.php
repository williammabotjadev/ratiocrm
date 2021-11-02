@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-row justify-content-center align-items-center">
           <form action="{{ route('store-product', ['id' => $biz->id]) }}" class="form-group" method="POST">
               @csrf
               <fieldset>
                   <legend>New Product</legend>
                   <br>
                   <br>
            <div class="d-flex flex-row">
            <div class="w-50 container">
               <label for="prodname" class="form-label">Product Name</label>
               <br>
               <input type="text" name="prodname" id="prodname" class="form-control" required>
               <br>
               <label for="prodsku" class="form-label">SKU Code</label>
               <br>
               <input type="text" name="prodsku" id="regno" class="form-control">
               <br>
               <label for="description" class="form-label">Product Description</label>
               <br>
               <textarea cols="4" rows="5" name="description" id="description" class="form-control" required>
               <br>
               <label for="producttype" class="form-label">Product Type</label>
               <br>
               <input type="text" name="producttype" id="surburb" class="form-control">
               <br>
               <label for="costprice" class="form-label">Cost Price</label>
               <br>
               <input type="number" name="costprice" id="costprice" class="form-control px-5" required>
               <br>
               <label for="sellingprice" class="form-label">Selling Price</label>
               <br>
               <input type="number" name="sellingprice" id="sellingprice" class="form-control px-5" required>
               <br>
            </div>
            
               <br>
               <div class="d-flex flex-row mt-2">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a href="{{ route('biz-products', ['id' => $biz->id]) }}" type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
              
               </div>
  
            </fieldset>
           </form>
        </div>
    </div>
</div>
@endsection