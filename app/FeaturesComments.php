<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturesComments extends Model
{
    //
	protected $fillable=['body','feature_id','user_id'];
	
    public function features()
    {
    	return $this->belongsTo(Feature::class,'feature_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }     
}
