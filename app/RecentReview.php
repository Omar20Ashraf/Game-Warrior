<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentReview extends Model
{
    protected $fillable=['title','par','image','evalution','evalution_color','page_id'];	

    public function mainpage(){

    	return $this->belongsTO(MainPage::class);
    } 
}
