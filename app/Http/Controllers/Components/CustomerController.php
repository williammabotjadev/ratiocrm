<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CustomerController extends Controller
{
    public function new_customer()
    {
        return view('customers.new');
    }

    public function store_customer()
    {
        return view('customers.new');
    }
}
