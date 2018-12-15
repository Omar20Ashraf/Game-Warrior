<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    public function posts()
    {

    	return $this->belongsTo(Comments::class);
    } 
}
