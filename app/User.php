<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        return $this->admin;
    }

    public function featurescomments(){
        return $this->hasMany(FeaturesComments::class);
    }

    public function recentgamecomments(){
       return $this->hasMany(RecentGameComments::class);
    } 

    public function recentreviewcomments(){
       return $this->hasMany(RecentReviewComments::class);
    }

    public function blogGamecomments(){
       return $this->hasMany(BlogGamesComments::class);
    }                
}
