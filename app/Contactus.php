<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    public function contactusBackground()
    {

    	return $this->hasMany(ContactusBackground::class);
    }
}
