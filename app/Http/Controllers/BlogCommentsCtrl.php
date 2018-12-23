<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\BlogGame;
use App\BlogGamesComments;

use App\BlogSidebar;
use App\BlogSidebarComments;
class BlogCommentsCtrl extends Controller
{
    public function GamesLayout(BlogGame $games){
        $items=BlogSidebar::all();
        return view('blog-page.gameLayout',compact('games','items'));        
    }

    public function GamesStore(BlogGame $games){
    	$userId = Auth::id();
    	BlogGamesComments::create([
    		'body' =>request('body'),
    		'blog_game_id' => $games->id,
    		'user_id' => $userId
    	]);

    	return back();
    }

    public function SidebarLayout(BlogSidebar $games){
        $items=BlogSidebar::all();
        return view('blog-page.sidebarLayout',compact('games','items'));        
    }

    public function SidebarStore(BlogSidebar $games){
        $userId = Auth::id();
        BlogSidebarComments::create([
            'body' =>request('body'),
            'blog_sidebar_id' => $games->id,
            'user_id' => $userId
        ]);

        return back();
    }    
}
