<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    //
	protected $fillable=['name'];

    public function hero()
    {
    	return $this->hasMany(Hero::class);
    }

    public function feature()
    {
    	return $this->hasMany(Feature::class);
    }

    public function recentGame()
    {
        return $this->hasMany(RecentGame::class);
    }

    public function tournament()
    {
        return $this->hasMany(Tournaments::class,'page_id');
    }

    public function recentReview()
    {
        return $this->hasMany(RecentReview::class,'page_id');
    } 
}
