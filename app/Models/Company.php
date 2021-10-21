<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'registration_no',
        'street_address',
        'surburb',
        'citytown',
        'zip_postal_code',
        'state_province_region',
        'email_address',
        'contact_no',
        'additional_contact_no',
        'website',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'contact_person_firstname',
        'contact_person_lastname',
        'contact_person_contact_no',
        'contact_person_linkedin',
        'industry',
        'business_type'
    ];

    public function employees()
    {

    }

    public function customers()
    {
        
    }
}
