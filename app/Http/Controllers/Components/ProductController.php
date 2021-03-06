<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;

class ProductController extends Controller
{
    public function new_product(Request $request)
    {
        $id = $request->id;

        $biz = Company::find($id);

        return view('products.new', ['biz' => $biz]);
    }

    public function store_product(Request $request)
    {
        $user = $request->user();
        
        /*$validated = $request->validate([
            'name' => 'required|max:100',
            'registration_no' => 'required|max:100',
            'street_address' => 'required|max:255',
            'surburb' => 'required|max:100',
            'citytown' => 'required|max:100',
            'zip_postal_code' => 'required|max:50',
            'state_province_region' => 'required|max:100',
            'country' => 'required|max:100',
            'email' => 'required|unique:companies|max:100',
            'contact_no' => 'required|max:50',
            'website_url' => 'required|max:100',
            'contact_person_firstname' => 'required|max:100',
            'contact_person_lastname' => 'required|max:100',
            'contact_email' => 'required|max:100',
        ]);

        dd($validated);*/

        $product_data = [
            'name' => $request['prodname'],
            'sku_code' => $request['prodsku'],
            'description' => $request['description'],
            'product_type' => $request['producttype'],
            'cost_price' => $request['costprice'],
            'selling_price' => $request['sellingprice']
        ];

        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);

        $product = Product::create($product_data);

        $biz->products()->save($product);

        $products = $biz->products()->get();
        // dd($user);

        return view('products.home', ['biz' => $biz, 'products' => $products]);

    }
}
