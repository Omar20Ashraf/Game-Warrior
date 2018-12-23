<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//Mainpage Items
use App\RecentGame;
use App\RecentGameComments;

use App\Feature;
use App\FeaturesComments;

use App\RecentReview;
use App\RecentReviewComments;

use App\BlogSidebar;


class IndexComments extends Controller
{
    //
    public function featureGamesLayout(Feature $products){
        $items=BlogSidebar::all();
        return view('index-page.single-game-layout',compact('products','items'));        
    }

    public function featurestore(Feature $products){
    	$userId = Auth::id();
    	FeaturesComments::create([
    		'body' =>request('body'),
    		'feature_id' => $products->id,
    		'user_id' => $userId
    	]);

    	return back();
    }

    public function recentGamesLayout(RecentGame $recentgames){
        $items=BlogSidebar::all();
        return view('index-page.singleGamesLayout.recentgame',compact('recentgames','items'));        
    }

    public function recentGamesstore(RecentGame $recentgames){
    	$userId = Auth::id();
    	RecentGameComments::create([
    		'body' =>request('body'),
    		'recent_game_id' => $recentgames->id,
    		'user_id' => $userId
    	]);

    	return back();
    }

    public function recentReviewsLayout(RecentReview $recentreviews){
        $items=BlogSidebar::all();
        return view('index-page.singleGamesLayout.recentReview',
                compact('recentreviews','items'));        
    }

    public function recentReviewsStore(RecentReview $recentreviews){
        $userId = Auth::id();
        RecentReviewComments::create([
            'body' =>request('body'),
            'recent_review_id' => $recentreviews->id,
            'user_id' => $userId
        ]);

        return back();
    }    

}
