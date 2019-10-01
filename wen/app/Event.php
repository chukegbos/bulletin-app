<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
	 protected $fillable = [
        'author', 'description', 'theme', 'title', 'slug', 'status', 'featured_image', 'post_count', 'date_event', 'end_event', 'type', 'venue'
    ];

    protected $dates = [
       'deleted_at',  'date_event', 'end_event',
    ];



    public function getShortContentAttribute()
    {
    	return substr(strip_tags($this->post_content) , 0, 250).'...';
    }

}