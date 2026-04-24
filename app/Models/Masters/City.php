<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'state_id',
        'name',
        'slug',
        'is_active',
    ];

    protected $casts = [
        'is_boolean'=>'boolean',
    ];

    public function state(){
        return $this->belongsTo(State::class);
    }
}
