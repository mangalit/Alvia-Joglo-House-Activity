<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'price',
        'main_image',
        'images',
        'is_reverse',
    ];

    protected $casts = [
        'images' => 'array',
        'is_reverse' => 'boolean',
    ];
}
