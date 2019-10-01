<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
	 protected $fillable = [
        'author', 'description', 'title', 'slug', 'status', 'comment_status', 'category', 'tag', 'featured_image', 'post_count', 'pdf', 'video'
    ];

    protected $dates = [
       'deleted_at', 
    ];



    public function getShortContentAttribute()
    {
    	return substr(strip_tags($this->post_content) , 0, 250).'...';
    }

}