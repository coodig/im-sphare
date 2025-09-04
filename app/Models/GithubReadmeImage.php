<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GithubReadmeImage extends Model
{

    protected $table = 'readme_images';
    protected $fillable = [
        'repo_id',
        'alt_text',
        'img_url',
    ];

    public function github_repo()
    {

        return $this->belongsTo(GithubRepo::class);
    }
}
