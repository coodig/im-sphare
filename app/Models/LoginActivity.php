<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    protected $fillable = [
        'user_id',
        'ip_address',
        'status_id',
        'user_agent',
        'os',
        'device',
        'location',
        '',
        'logged_in_at',

    ];

    public function status(){
        return  $this->belongsTo(Status::class,'status_id');
    }
}

