<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    protected $fillable = [
        'user_id',
        'plateform',
        'social_url',
    ];

    public function user(){
        return $this->belongsTo(User::class);
           }
}
