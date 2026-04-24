<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ='status';
    protected $fillable = [
        'name',
        'slug',
        'group',
        'color'
    ];

    public function loginActivities(){
        return $this->hasMany(LoginActivity::class,'status_id');
    }
}
