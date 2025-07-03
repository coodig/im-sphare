<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GithubRepo extends Model
{
    // ✅ Allow mass assignment for these columns
    protected $fillable = [
        'github_id',
        'user_id',
        'name',
        'full_name',
        'html_url',
        'description',
        'private',
        'fork',
        'created_at_git',
        'updated_at_git',
    ];

    // ✅ Optional: If using soft deletes later
    // use SoftDeletes;

    // ✅ Relationships

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(GithubLanguage::class, 'repo_id');
    }

    public function releases(): HasMany
    {
        return $this->hasMany(GithubRelease::class, 'repo_id');
    }

    public function stars(): HasMany
    {
        return $this->hasMany(GithubStar::class, 'repo_id');
    }

    public function zip(): HasMany
    {
        return $this->hasMany(GithubRepoZip::class, 'repo_id');
    }

    // ✅ Optional accessor: formatted date
    public function getFormattedCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at_git)->format('d M, Y');
    }
}
