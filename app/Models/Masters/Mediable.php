<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class Mediable extends Model
{
    protected $table = 'mediables';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
