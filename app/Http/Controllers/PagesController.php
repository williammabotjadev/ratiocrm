<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function features() 
    {
        return view('pages.features');
    }
}
