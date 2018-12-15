<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
	protected $fillable=['description','tag_name','tag_color'];
}
