<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class PrivacyLevel extends Model
{
    protected $table = 'privacy_levels';

    protected $fillable = [
        'name',
        'slug',
        'color',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
