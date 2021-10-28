<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportingController extends Controller
{
    public function new_customer()
    {
        return view('customers.new');
    }

    public function store_customer(Request $request)
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

        $business_data = [
            'name' => $request['businessname'],
            'registration_no' => $request['regno'],
            'street_address' => $request['streetaddress'],
            'surburb' => $request['surburb'],
            'citytown' => $request['citytown'],
            'zip_postal_code' => $request['zippostalcode'],
            'state_province_region' => $request['stateprovinceregion'],
            'country' => $request['country'],
            'email' => $request['email'],
            'contact_no' => $request['contactno'],
            'website_url' => $request['website'],
            'contact_person_firstname' => $request['contactfname'],
            'contact_person_lastname' => $request['contactlname'],
            'contact_email' => $request['contactemal']
        ];

        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);

        $customer = Customer::create($customer_data);

        $biz->customers()->save($customer);

        // dd($user);

        return redirect('customers.home');

    }
}
