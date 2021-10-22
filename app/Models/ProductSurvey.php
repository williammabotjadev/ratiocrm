<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'question_id');
    }
}
