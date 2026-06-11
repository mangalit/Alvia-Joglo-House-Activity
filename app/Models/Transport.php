<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'route',
        'description',
        'image',
        'is_reverse',
    ];

    protected $casts = [
        'is_reverse' => 'boolean',
    ];
}
