<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'contact_no',
        'email',
        'street_address',
        'surburb',
        'citytown',
        'zip_postal_code',
        'state_province_region',
        'linkedin_url',
        'twitter_url',
        'facebook_url',
        'employee_type'
    ];

    public function company()
    {

    }

    public function customers()
    {

    }
}
