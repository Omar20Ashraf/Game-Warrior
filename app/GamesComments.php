<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamesComments extends Model
{
	protected $fillable=['body','user_id','games_id'];

    public function games()
    {

    	return $this->belongsTo(Games::class);
    }

    public function user()
    {

    	return $this->belongsTo(User::class);
    } 
}
