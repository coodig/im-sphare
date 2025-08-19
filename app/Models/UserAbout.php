<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAbout extends Model
{
    protected $table='user_about';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'content',
        'image',
        'is_public'

    ];

    public function user(){
             return $this->belongsTo(User::class);
           }
}
