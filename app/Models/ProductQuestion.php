<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuestion extends Model
{
    use HasFactory;

    protected $filled = [
        'text',
        'yes',
        'no'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
