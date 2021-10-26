<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function features() 
    {
        return view('pages.features');
    }

    public function auth_home()
    {
        if(Auth::check()) {
            return redirect('home');
        }

        return view('welcome');
    }
}
