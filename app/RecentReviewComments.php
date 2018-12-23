<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentReviewComments extends Model
{
	protected $fillable=['body','user_id','recent_review_id'];

    public function recentReviews()
    {

    	return $this->belongsTo(RecentReview::class);
    }

    public function user()
    {

    	return $this->belongsTo(User::class);
    } 
}
