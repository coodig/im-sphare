<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    protected $fillable = [
        'user_id',
        'ip_address',
        'browser',
        'device',
        // 'location',
        // 'operating_system',
        // 'status',
        'logged_in_at',

    ];
}
