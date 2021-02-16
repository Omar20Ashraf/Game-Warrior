<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentGame extends Model
{   
	protected $table = 'recent_games';

    
	protected $fillable=['title','par','image','image_button_class','image_button','comments','page_id'];

    public function mainpage()
    {
    	return $this->belongsTo(MainPage::class);
    }

    public function recentGamecomment()
    {
    	return $this->hasMany(RecentGameComments::class,'recentgame_id');
    } 
       
}
