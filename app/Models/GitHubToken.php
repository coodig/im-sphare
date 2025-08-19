<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;

class GitHubToken extends Model
{
    protected $table = 'github_tokens';
    protected $fillable = ['user_id', 'github_token'];



    public function setTokenAttribute($value)
    {
        $this->attributes['github_token'] = Crypt::encryptString($value);
    }

    public function getTokenAttribute($value)
    {
        return Crypt::decryptString($value);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
