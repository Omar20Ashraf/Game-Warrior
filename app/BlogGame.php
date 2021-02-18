<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogGame extends Model
{	

	protected $table = 'blog_games';
	
	protected $fillable=['name','par','image','button','button_color'];

    // public function blogpage()
    // {
    // 	return $this->belongsTO(BlogPage::class);
    // } 

    public function blogGamesComment()
    {

    	return $this->hasMany(BlogGamesComments::class);
    }    
}
