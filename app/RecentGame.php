<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentGame extends Model
{
	protected $fillable=['title','par','image','image_button_class',
						 'image_button','comments','page_id'];
    
    public function mainpage()
    {

    	return $this->belongsTO(MainPage::class);
    }
}
