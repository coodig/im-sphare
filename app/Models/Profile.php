<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
       'user_id',
        'name',
        'profile_image',
        'location',
        'dob',
        'gender',
        'bio',
        'website',
        'privacy_level_id',
        'profile_banner',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function privacyLevel(){
        return $this->belongsTo(PrivacyLevel::class);
    }
}
