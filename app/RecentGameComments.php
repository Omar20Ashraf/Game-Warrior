<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentGameComments extends Model
{
    //

	protected $fillable=['body','user_id','recent_game_id'];

    public function recentGames()
    {

    	return $this->belongsTo(RecentGame::class);
    }

    public function user()
    {

    	return $this->belongsTo(User::class);
    }         
}
