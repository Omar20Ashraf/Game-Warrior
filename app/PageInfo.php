<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageInfo extends Model
{	

	protected $table = 'page_infos';

	protected $fillable=['image','par','title'];

    // public function blogpage()
    // {
    // 	return $this->belongsTO(BlogPage::class);
    // }
}
