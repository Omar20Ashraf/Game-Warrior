<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogSidebarComments extends Model
{
	protected $fillable=['body','user_id','blog_sidebar_id'];

    public function bloggames()
    {

    	return $this->belongsTo(BlogSidebar::class);
    }

    public function user()
    {

    	return $this->belongsTo(User::class);
    }
}
