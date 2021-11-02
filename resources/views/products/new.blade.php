@extends('layouts.app')

@section('content')
<div class="container">
  
           <form action="{{ route('store-product', ['id' => $biz->id]) }}" class="form-group" method="POST">
               @csrf
               <fieldset>
                   <legend>New Product</legend>
                   <br>
                   <br>
            
            <div class="d-flex flex-row justify-content-center">
              <div class="prod-left">  
               <label for="prodname" class="form-label">Product Name</label>
               <br>
               <input type="text" name="prodname" id="prodname" class="form-control" required>
               <br>
               <label for="prodsku" class="form-label">SKU Code</label>
               <br>
               <input type="text" name="prodsku" id="prodsku" class="form-control">
               <br>
               <label for="description" class="form-label">Product Description</label>
               <br>
               <textarea cols="10" rows="5" name="description" id="description" class="form-control" required>
               </textarea>
            </div>
            <div class="prod-right">
               <label for="producttype" class="form-label">Product Type</label>
               <br>
               <input type="text" name="producttype" id="producttype" class="form-control">
               <br>
               <label for="costprice" class="form-label">Cost Price</label>
               <br>
               <input type="number" name="costprice" id="costprice" class="form-control" required>
               <br>
               <label for="sellingprice" class="form-label">Selling Price</label>
               <br>
               <input type="number" name="sellingprice" id="sellingprice" class="form-control" required>
               <br>
               <div class="d-flex flex-row">
                    <button type="submit" class="btn btn-home px-5">Create</button>
                    <a href="{{ route('biz-products', ['id' => $biz->id]) }}" type="button" class="btn btn-danger text-white px-5 page-btn ml-5 btn-ml">Discard</a>
               </div>
            </div>
            </div>
            </fieldset>
           </form>
</div>
@endsection