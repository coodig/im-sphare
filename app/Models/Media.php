<?php

namespace App\Models;

use App\Models\Masters\Mediable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    // protected $guarded = [];

    protected $fillable =[
        'user_id',
        'collection_name',
        'file_type',
        'mime_type',
        'disk',
        'file_name',
        'file_url',
        'original_name',
        'file_size',
        'mediable_type',
        'mediable_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mediable(){
        return $this->belongsToMany(Mediable::class);
    }

}
