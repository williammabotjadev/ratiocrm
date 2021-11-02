<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable;

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
        'country',
        'linkedin_url',
        'twitter_url',
        'password',
        'facebook_url',
        'employee_type'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'transaction_id');
    }

    public function serviceTypes()
    {
        return $this->hasMany(ServiceType::class, 'service_type_id');
    }

    public function productTypes()
    {
        return $this->hasMany(ProductType::class, 'product_type_id');
    }
}
