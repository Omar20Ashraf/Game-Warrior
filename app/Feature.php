<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
	protected $fillable=['image','button','par','page_id','title','comments',
						 'button_color'];

    public function mainpage()
    {

    	return $this->belongsTO(MainPage::class);
    } 
}
