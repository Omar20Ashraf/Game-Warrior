<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogGamesComments extends Model
{
	protected $fillable=['body','user_id','blog_game_id'];

    public function games()
    {
    	return $this->belongsTo(BlogGame::class,'blog_game_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    } 
}
