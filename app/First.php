<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
	protected $fillable=['image','par','title'];

    public function gamepage()
    {

    	return $this->belongsTO(GamePage::class);
    } 
}
