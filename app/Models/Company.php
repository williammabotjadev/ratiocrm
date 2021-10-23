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
        'country',
        'email',
        'contact_no',
        'additional_contact_no',
        'website_url',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'contact_person_firstname',
        'contact_person_lastname',
        'contact_person_contact_no',
        'contact_email',
        'contact_person_linkedin',
        'industry',
        'business_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'employee_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }

    public function suppliers() 
    {
        return $this->hasMany(Supplier::class, 'supplier_id');
    } 

    public function transactions() 
    {
        return $this->hasMany(Transaction::class, 'transaction_id');
    } 
}
