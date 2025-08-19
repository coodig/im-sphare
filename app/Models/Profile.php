<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profile';

    protected $fillable = [
       'user_id',
        'name',
        'location',
        'dob',
        'gender',
        'bio',
        'website',
        'privacy_level_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function privacyLevel(){
        return $this->belongsTo(PrivacyLevel::class);
    }
}
