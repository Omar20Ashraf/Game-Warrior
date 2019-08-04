<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Games;
use App\BlogSidebar;
use App\GamesComments;

class GamesCommentsCtrl extends Controller
{

    public function GamesLayout(Games $games)
    {
        $items=BlogSidebar::all();
        return view('game-page.gamesLayout',compact('games','items'));        
    }

    public function GamesStore(Games $games){
    	$userId = Auth::id();
    	GamesComments::create([
    		'body' =>request('body'),
    		'games_id' => $games->id,
    		'user_id' => $userId
    	]);

    	return back();
    }

}
