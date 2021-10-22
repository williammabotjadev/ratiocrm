<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function service()
    {
        return $this->belongsTo(Product::class, 'service_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'question_id');
    }
}
