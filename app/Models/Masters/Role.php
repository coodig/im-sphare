<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'level',
        'description',
        'is_active'
    ];

    protected $casts = [
        'is_active'=> 'boolean',
    ];
}
