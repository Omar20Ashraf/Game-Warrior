<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/','Api\PageController@index');

Route::get('/games','Api\PageController@games');

Route::get('/blog','Api\PageController@blog');

Route::get('/contact','Api\PageController@contact');

Route::post('/sendEmail','Api\PageController@sendEmail');
