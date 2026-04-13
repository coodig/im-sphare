<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GithubReadmeContent extends Model
{
    protected $table = "github_readme_contents";

    protected $fillable = [
        'repo_id',
        'content'
    ];
}
