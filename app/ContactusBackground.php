<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactusBackground extends Model
{
	protected $fillable=['name','description','image'];

    public function contactus()
    {

    	return $this->belongsTO(Contactus::class);
    } 
}
