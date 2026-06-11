<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'min_booking_info',
        'price_info',
        'card_title',
        'description',
        'bg_image',
        'images',
        'is_reverse',
    ];

    protected $casts = [
        'images' => 'array',
        'is_reverse' => 'boolean',
    ];
}
