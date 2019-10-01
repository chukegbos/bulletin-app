<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Board extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'post', 'image', 'facebook', 'twitter', 'linkedin', 'instagram', 'youtube', 'googleplus', 'description'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
