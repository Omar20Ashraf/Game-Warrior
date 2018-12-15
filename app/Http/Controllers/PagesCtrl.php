<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Mail Class
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

//Latest News
use App\LatestNews;

//Mainpage Items
use App\Hero;
use App\Feature;
use App\RecentGame;
use App\Tournaments;
use App\RecentReview;

//game Items
use App\First;
use App\Games;

//blog Items
use App\PageInfo;
use App\BlogGame;
use App\BlogSidebar;

//Contact us Items
use App\ContactusBackground;
use App\PersonalInfo;
class PagesCtrl extends Controller
{
    //
    // public function header(){
    //     $latests=LatestNews::all();
    //     return view('latestnews.index',compact('latests'));
    // }


    public function index()
    {
        $products=Hero::all();
        $features=Feature::all();
        $recentgames=RecentGame::all();
        $tournaments=Tournaments::all();
        $recentreviews=RecentReview::all();
    	return view('pages.index',
                compact('products','features','recentgames','tournaments',
                        'recentreviews'));
    }

    public function games()
    {
        $firsts=First::all();
        $games=Games::all();

        $recentreviews=RecentReview::all();

    	return view('pages.games',compact('firsts','games','recentreviews'));
    } 

    public function blog()
    {
        $firsts=PageInfo::all();
        $games=BlogGame::all();
        $items=BlogSidebar::all();
    	return view('pages.blog',compact('firsts','games','items'));
    } 

    public function forums()
    {

    	return view('pages.forums');
    } 

    public function contact()
    {

        $items=ContactusBackground::all();
        $personals=PersonalInfo::all();
    	return view('pages.contact',compact('items','personals'));
    } 

    public function dosend(Request $request){
        //validation
        $this->validate(request(),[
            'name' =>'required',
            'email' =>'required',
            'subject'  =>'required',
            'body'  =>'required'

        ]);

        $name=$request->input('name');
        $email=$request->input('email');
        $subject=$request->input('subject');
        $body=$request->input('body');

        Mail::to('omaarashraf2020@gmail.com')->
              send(new ContactUs($name, $email, $subject, $body));

        return redirect('/contact')->with('success','Message Send Successfully');      
    }

    public function singleGameLayout($id){
        $products=Feature::find($id);
        $items=BlogSidebar::all();
        return view('index-page.single-game-layout',compact('products','items'));        
    }

}
