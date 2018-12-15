<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//main page
Route::get('/','PagesCtrl@index')->name('index');

Route::get('/index/{id}','PagesCtrl@singleGameLayout');


//pages
Route::get('/games','PagesCtrl@games')->name('games');
Route::get('/blog','PagesCtrl@blog')->name('blog');
Route::get('/forums','PagesCtrl@forums')->name('forums');
Route::get('/contact','PagesCtrl@contact')->name('contact');

Route::post('/dosend','PagesCtrl@dosend')->name('dosend');

//Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

//group route admin
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function()
{

	Route::get('/',function()
	{
		return view('admin.index'); 
	})->name('admin.index');

	Route::resource('mainpage','MainPageController');

	// Home Page Routes
	Route::resource('hero','HeroController');
	Route::resource('feature','FeatureCtrl');
	Route::resource('recentgame','RecentGameCtrl');
	Route::resource('tournament','TournamentCtrl');
	Route::resource('recentreview','RecentReviewCtrl');

	//latest News Section
	Route::resource('latestnews','LatestNewsctrl');
	
	// Game Page Routes
	Route::resource('first','FirstCtrl');
	Route::resource('game','GameCtrl');

	// blog Page Routes
	Route::resource('pageinfo','PageinfoCtrl');
	Route::resource('bloggames','BlogGamesCtrl');
	Route::resource('blogsidebar','BlogSideBarCtrl');

	// Contact us Page Routes
	Route::resource('contactbackground','ContactusBackgroundCtrl');
	Route::resource('personalinfo','PersonalInfoCtrl');


});
