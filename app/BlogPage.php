<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    public function pageInfo()
    {

    	return $this->hasMany(PageInfo::class);
    }

    public function blogGame()
    {

    	return $this->hasMany(BlogGame::class);
    }  

    public function blogSidebar()
    {

    	return $this->hasMany(BlogSidebar::class);
    }       
}

