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
        $user = $request->user();
        
        $validated = $request->validate([
            'name' => 'required|max:100',
            'registration_no' => 'required|max:100',
            'street_address' => 'required|max:255',
            'surburb' => 'required|max:100',
            'citytown' => 'required|max:100',
            'zip_postal_code' => 'required|max:50',
            'state_province_region' => 'required|max:100',
            'country' => 'required|max:100',
            'email' => 'required|unique|max:100',
            'contact_no' => 'required|max:50',
            'website_url' => 'required|max:100',
            'contact_person_firstname' => 'required|max:100',
            'contact_person_lastname' => 'required|max:100',
            'contact_email' => 'required|max:100',
        ]);

        $business_data = [
            'name' => $validated['businessname'],
            'registration_no' => $validated['regno'],
            'street_address' => $validated['streetaddress'],
            'surburb' => $validated['surburb'],
            'citytown' => $validated['citytown'],
            'zip_postal_code' => $validated['zippostalcode'],
            'state_province_region' => $validated['stateprovinceregion'],
            'country' => $validated['country'],
            'email' => $validated['email'],
            'contact_no' => $validated['contactno'],
            'website_url' => $validated['website'],
            'contact_person_firstname' => $validated['contactfname'],
            'contact_person_lastname' => $validated['contactlname'],
            'contact_email' => $validated['contactemal']
        ];

        $business = Company::create($business_data);

        $user->companies()->save($business);

        return view('home');


        
    }
}
