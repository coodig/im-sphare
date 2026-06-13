<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    protected $table ='testing_data';

    protected $fillable = [
        'user_id',
        'test_name',
        'test_description',
        'test_img',
        'test_data'
    ];
}
