<?php

namespace App\Providers;

use App\LatestNews;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(150);

        View::composer('pages.latest_news',function ($view){

            $latestNews = LatestNews::latest()->get();
            
            $view->with('latestNews',$latestNews);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
