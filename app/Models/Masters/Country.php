<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'phone_code',
        'iso_code',
        'is_active',
    ];

    protected $casts = [
        'is_active'=>'boolean',
    ];
}
