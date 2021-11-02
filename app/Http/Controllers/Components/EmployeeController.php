<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function new_employee(Request $request)
    {
        $id = $request->id;

        $biz = Company::find($id);

        return view('employees.new', ['biz' => $biz]);
    }

    public function store_employee(Request $request)
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

        $employee_data = [
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'street_address' => $request['streetaddress'],
            'surburb' => $request['surburb'],
            'citytown' => $request['citytown'],
            'zip_postal_code' => $request['zippostalcode'],
            'state_province_region' => $request['stateprovinceregion'],
            'country' => $request['country'],
            'email' => $request['email'],
            'contact_no' => $request['contactno'],
            'password' => $request['password'],
            'linkedin_url' => $request['linkedin_url'],
            'facebook_url' => $request['facebook_url'],
            'employee_type' => $request['employee_type']
        ];

        //dd($request);
        $id = $request->id;
        // dd($id);

        $biz = Company::find($id);

        $employee = Employee::create($employee_data);

        $biz->employees()->save($employee);

        // dd($user);

        return redirect('employees.home');

    }
}
