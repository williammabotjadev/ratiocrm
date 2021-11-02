<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'service_cost',
        'name',
        'description',
        'service_type'
    ];

    public function supplier()
    {
        return $this->hasMany(Supplier::class, 'supplier_id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
