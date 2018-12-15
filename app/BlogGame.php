<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogGame extends Model
{
	protected $fillable=['name','par','image','button','button_color'];

    public function blogpage()
    {

    	return $this->belongsTO(BlogPage::class);
    } 
}
