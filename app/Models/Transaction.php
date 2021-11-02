<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_type'
    ];    

    
    public function products()
    {
        return $this->hasMany(Product::class, 'transaction_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'transaction_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'transaction_id');
    }

    public function employee()
    {
        return $this->hasOne(Customer::class, 'employee_id');
    }

}
