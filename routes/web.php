<?php


//main page
Route::get('/','PagesCtrl@index')->name('index');

//index page


//Features section in the index page Routes for Comments and single game page
Route::get('/index/feature/{products}','IndexComments@featureGamesLayout');
Route::post('/index/feature/{products}/comments',
			'IndexComments@featurestore');

//recent Game section in the index page Routes for Comments and single game page
Route::get('/index/recentgame/{recentgames}','IndexComments@recentGamesLayout');
Route::post('/index/recentgame/{recentgames}/comments',
			'IndexComments@recentGamesstore');

//recent Review section in the index page Routes for Comments and single game page
Route::get('/index/recentreview/{recentreviews}',
			'IndexComments@recentReviewsLayout');
Route::post('/index/recentreview/{recentreviews}/comments',
			'IndexComments@recentReviewsStore');

//Game page

//Games section in the Games page Routes for Comments and single game page
Route::get('/game/games/{games}','GamesCommentsCtrl@GamesLayout');
Route::post('/game/games/{games}/comments',
			'GamesCommentsCtrl@GamesStore');


//blog page

//Games Info section in the blog page Routes for Comments and single game page
Route::get('/blog/games/{games}','BlogCommentsCtrl@GamesLayout');

Route::post('/blog/games/{games}/comments',
			'BlogCommentsCtrl@GamesStore');

//Sidebar section in the blog page Routes for Comments and single game page
Route::get('/blog/sidebar/{games}','BlogCommentsCtrl@SidebarLayout')->name('blogsidebar');

Route::post('/blog/sidebar/{games}/comments',
			'BlogCommentsCtrl@SidebarStore');

//pages
Route::get('/games','PagesCtrl@games')->name('games');
Route::get('/blog','PagesCtrl@blog')->name('blog');
Route::get('/forums','PagesCtrl@forums')->name('forums');
Route::get('/contact','PagesCtrl@contact')->name('contact');


Route::get('/home', 'HomeController@index')->name('home');



Route::post('/dosend','PagesCtrl@dosend')->name('dosend');

//User Authentication
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

//group route admin
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function()
{

	Route::get('/','MainPageController@index')->name('admin.index');

	// Route::get('/admin',function()
	// {
	// 	return view('admin.index'); 
	// })->name('admin.index');

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



// // Admin Authentication

// Route::get('admin', 'admin\LoginController@showLoginForm')->name('admin.login');

// Route::post('admin', 'admin\LoginController@login');

// // Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::post('admin-password/email', 'admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

// Route::get('admin-password/reset', 'admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

// Route::post('admin-password/reset', 'admin\ResetPasswordController@reset')->name('admin.password.update');

// Route::get('admin-password/reset/{token}', 'admin\ResetPasswordController@showResetForm')->name('admin.password.reset');