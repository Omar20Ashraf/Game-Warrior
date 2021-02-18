<?php

namespace App\Http\Controllers\Api;

use App\BlogGame;
use App\BlogSidebar;
use App\ContactusBackground;
use App\Feature;
use App\First;
use App\Games;
use App\Hero;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogGameCollection;
use App\Http\Resources\BlogSidebarCollection;
use App\Http\Resources\ContactusBackgroundCollection;
use App\Http\Resources\FeatureCollection;
use App\Http\Resources\FirstCollection;
use App\Http\Resources\GameCollection;
use App\Http\Resources\HeroCollection;
use App\Http\Resources\PageInfoCollection;
use App\Http\Resources\PersonalInfoResource;
use App\Http\Resources\RecentGameCollection;
use App\Http\Resources\RecentReviewCollection;
use App\Http\Resources\TournamentCollection;
use App\Mail\ContactUs;
use App\PageInfo;
use App\PersonalInfo;
use App\RecentGame;
use App\RecentReview;
use App\Tournaments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
class PageController extends Controller
{
    //

    public function index()
    {

        return [
                 'slider'   =>  HeroCollection::collection(Hero::latest()->get()),
                 'features' => FeatureCollection::collection(Feature::latest()->get()),
                 'recentgames' => RecentGameCollection::collection(RecentGame::latest()->get()),
                 'tournaments' => TournamentCollection::collection(Tournaments::latest()->get()),
                 'recentreviews' => RecentReviewCollection::collection(RecentReview::latest()->get()),
               ];
    }


    public function games()
    {

        return [
                 'recentreviews' => RecentReviewCollection::collection(RecentReview::latest()->get()),
                 'firsts' => FirstCollection::collection(First::latest()->get()),
                 'games' => GameCollection::collection(Games::latest()->get()),
            ];
    }

    public function blog()
    {

        return [
                 'info' => PageInfoCollection::collection(PageInfo::latest()->get()),
                 'games' => BlogGameCollection::collection(BlogGame::latest()->get()),
                 'items' => BlogSidebarCollection::collection(BlogSidebar::latest()->get()),
            ];
    }


    public function contact()
    {

        return [
                 'items' => ContactusBackgroundCollection::collection(ContactusBackground::latest()->get()),
                 'games' => new PersonalInfoResource(PersonalInfo::latest()->first()),
            ];
    }

    public function sendEmail(Request $request)
    {   

        //validation
        $this->validate(request(),[
            'name' =>'required|string|max:225',
            'email' =>'required|email|max:225',
            'subject'  =>'required|string|max:225',
            'body'  =>'required|string'
        ]);

        Mail::to('omaarashraf2020@gmail.com')->
              send(new ContactUs($request->name, $request->email, $request->subject, $request->body));

        return response([
            'data' => 'Mail Send Successfully'],Response::HTTP_CREATED);     
    }
}
