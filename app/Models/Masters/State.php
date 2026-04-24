<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'is_active',
    ];

    protected $casts = [
        'is_active'=>'boolean',
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }
}
