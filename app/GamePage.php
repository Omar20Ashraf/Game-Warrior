<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamePage extends Model
{
    public function first()
    {

    	return $this->hasMany(First::class);
    }
    
    public function games()
    {

    	return $this->hasMany(Games::class);
    }    
}
