<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'address',
        'website',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
