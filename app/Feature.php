<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{   

    protected $table = 'features';

	protected $fillable=['image','button','par','page_id','title','button_color','title'];

    public function mainpage()
    {

    	return $this->belongsTO(MainPage::class);
    } 

    public function featureComment()
    {

    	return $this->hasMany(FeaturesComments::class,'feature_id');
    }
 }
