<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function setup()
    {
        return view('business.setup');
    }
}
