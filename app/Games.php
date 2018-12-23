<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
	protected $fillable=['image','par','name','review'];

    public function gamepage()
    {

    	return $this->belongsTO(GamePage::class);
    }

    public function gamecomment()
    {

    	return $this->hasMany(GamesComments::class);
    }      
}
