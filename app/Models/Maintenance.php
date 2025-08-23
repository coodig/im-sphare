<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{

    protected $table = 'maintenance_logs';
    protected $fillable =[
        'user_id','action','status','message','meta'
    ];

    protected $casts=[
        'meta'=>'array'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
