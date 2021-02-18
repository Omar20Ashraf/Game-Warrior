<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{	
	protected $table = 'games';

	protected $fillable=['image','par','name','review'];

    public function gamecomment()
    {
    	return $this->hasMany(GamesComments::class);
    }      
}
