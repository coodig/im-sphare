<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGithubAccount extends Model
{
    protected $fillable = ['user_id', 'github_token', 'github_username'];
}
