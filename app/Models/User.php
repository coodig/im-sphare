<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function githubToken()
    {
        return $this->hasMany(GitHubToken::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    public function contact()
    {
        return $this->hasOne(UserContact::class);
    }

    public function socialMediaLink()
    {
        return $this->hasmany(SocialMediaLink::class);
    }

    public function userabout()
    {
        return $this->hasOne(UserAbout::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function repos()
    {
        return $this->hasMany(GithubRepo::class);
    }

    public function maintenance()
{
    return $this->hasMany(Maintenance::class);
}

}


