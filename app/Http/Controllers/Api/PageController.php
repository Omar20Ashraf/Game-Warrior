<?php

namespace App\Http\Controllers\Api;

use App\Feature;
use App\Hero;
use App\Http\Controllers\Controller;
use App\Http\Resources\FeatureCollection;
use App\Http\Resources\HeroCollection;
use App\Http\Resources\RecentGameCollection;
use App\RecentGame;
use App\RecentReview;
use App\Tournaments;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {

        $tournaments = Tournaments::latest()->get();

        $recentreviews = RecentReview::latest()->get();

        return [
                 'slider'   =>  HeroCollection::collection(Hero::latest()->get()),
                 'features' => FeatureCollection::collection(Feature::latest()->get()),
                 'recentgames' => RecentGameCollection::collection(RecentGame::latest()->get()),
               ];
    }
}
