<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingStop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'track_type',
        'is_reverse',
    ];

    protected $casts = [
        'is_reverse' => 'boolean',
    ];
}
