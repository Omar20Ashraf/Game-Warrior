<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentGameComments extends Model
{
    //

	protected $fillable=['body','user_id','recentgame_id'];

    public function recentGames()
    {
    	return $this->belongsTo(RecentGame::class,'recentgame_id');
    }

    public function user()
    {

    	return $this->belongsTo(User::class,'user_id');
    }         
}
