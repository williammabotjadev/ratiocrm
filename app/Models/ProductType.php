<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function product()
    {
        return $this->belongsTo(Service::class, 'product_id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_id');
    }
}
