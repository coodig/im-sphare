<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyLevel extends Model
{
    protected $fillable = [
        'name','label',
    ];

    // public function profile(){
    //     return $this->hasMany(Profile::class);
    // }
}

