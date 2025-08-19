<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    protected $fillable = [
        'user_id',
        'location',
        'operating_system',
        'status',
        'login_time',

    ];
}
