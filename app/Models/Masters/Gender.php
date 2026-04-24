<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
