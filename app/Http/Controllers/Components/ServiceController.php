<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Service;

class ServiceController extends Controller
{
    public function new_service(Request $request)
    {
        $id = $request->id;

        $biz = Company::find($id);

        return view('services.new', ['biz' => $biz]);
    }

    public function store_service(Request $request)
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

        $service_data = [
            'name' => $request['servname'],
            'description' => $request['description'],
            'service_type' => $request['servicetype'],
            'service_cost' => $request['servicecost'],
            'price' => $request['serviceprice']
        ];

        //dd($request);
        $id = $request->id;
        //dd($id);

        $biz = Company::find($id);

        $service = Service::create($service_data);

        $biz->services()->save($service);

        // dd($user);
        $services = $biz->services()->get();

        return redirect('services.home', ['services' => $services, 'biz' => $biz]);

    }
}
