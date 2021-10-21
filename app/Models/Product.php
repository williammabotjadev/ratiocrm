<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cost_price',
        'selling_price',
        'sku_code',
        'name',
        'description',
        'product_type'
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
