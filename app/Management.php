<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Management extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'post', 'image'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
