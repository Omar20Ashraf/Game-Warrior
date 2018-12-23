<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturesComments extends Model
{
    //
	protected $fillable=['body','user_id','feature_id'];
	
    public function features()
    {

    	return $this->belongsTo(Feature::class);
    } 

    public function user()
    {

    	return $this->belongsTo(User::class);
    }     
}
