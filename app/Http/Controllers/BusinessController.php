<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class BusinessController extends Controller
{
    public function setup()
    {
        return view('business.setup');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => $request['businessname'],
            'registration_no' => $request['regno'],
            'street_address' => $request['streetaddress'],
            'surburb' => $request['surburb'],
            'citytown' => $request['citytown'],
            'zip_postal_code' => $request['zippostalcode'],
            'state_province_region' => $request['stateprovinceregion'],
            'country' => $request['country'],
            'email_address' => $request['email'],
            'contact_no' => $request['contactno'],
            'website_url' => $request['website'],
            'contact_person_firstname' => $request['contactfname'],
            'contact_person_lastname' => $request['contactlname'],
            'contact_email' => $request['contactemal']
        ]);

        $business_data = [
            'name' => $validated['name'],
            'registration_no' => $validated['registration_no'],
            'street_address' => $validated['street_address'],
            'surburb' => $validated['surburb'],
            'citytown' => $validated['citytown'],
            'zip_postal_code' => $validated['zip_postal_code'],
            'state_province_region' => $validated['state_province_region'],
            'country' => $validated['country'],
            'email' => $validated['email_address'],
            'contact_no' => $validated['contact_no'],
            'website_url' => $validated['website_url'],
            'contact_person_firstname' => $validated['contact_person_firstname'],
            'contact_person_lastname' => $validated['contact_person_lastname'],
            'contact_email' => $validated['contact_email']
        ];

        $business = Company::create($business_data);

        $business->save();

        return view('home');


        
    }
}
