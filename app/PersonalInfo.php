<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
	protected $fillable=['name','description','address','phone','email',
						 'facebook','twitter','github','linkedin'];

    public function contactus()
    {

    	return $this->belongsTO(Contactus::class);
    } 
}
