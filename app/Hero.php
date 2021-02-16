<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{	
	protected $table = 'heroes';

    protected $fillable=['title','par','image'];	

    public function mainpage()
    {

    	return $this->belongsTO(MainPage::class);
    }    
}
