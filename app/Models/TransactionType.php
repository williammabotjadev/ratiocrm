<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function transaction()
    {
        return $this->belongsTo(Company::class, 'transaction_id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'employee_id');
    }
}
