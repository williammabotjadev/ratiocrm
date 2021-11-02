<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'product_id');
    }

    public function editor()
    {
        return $this->hasMany(Employee::class, 'employee_id');
    }
}
