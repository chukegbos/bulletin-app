<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sitename', 'sitetitle', 'email', 'address', 'phone', 'facebook', 'twitter', 'linkedin', 'instagram', 'youtube', 'googleplus', 'logo', 'about', 'mission', 'vision', 'meta_description', 'keywords'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
