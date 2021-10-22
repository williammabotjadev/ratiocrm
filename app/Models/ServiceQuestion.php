<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQuestion extends Model
{
    use HasFactory;

    protected $filled = [
        'text',
        'yes',
        'no'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
