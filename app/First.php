<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{	

	protected $table = 'firsts';
	
	protected $fillable=['image','par','title'];
}
