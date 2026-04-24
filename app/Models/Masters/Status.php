<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'group',
        'color',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
