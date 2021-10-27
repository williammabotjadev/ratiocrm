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

        $business = Company::create($business_data);

        $user->companies()->save($business);

        // dd($user);

        return redirect('home');


        
    }

    public function delete_all(Request $request) {
        $user = $request->user();
        $user->companies()->delete();
        return redirect('home');
    }

    public function biz(Request $request) {
        
        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);

        return view('business.biz', ['biz' => $biz]);
    }

    public function edit(Request $request) {
        
        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);

        return view('business.edit', ['biz' => $biz]);
    }

    public function edit_contact(Request $request) {
        
        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);
        $contact = $biz->contact;

        return view('contact.edit', ['contact' => $contact]);
    }
    
}
