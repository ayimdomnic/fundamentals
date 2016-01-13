<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function(){
    return view('Pages.about');
});
Route::get('contact', function(){
    return view('pages.contact');
});

Route::get('blog' function(){
    return redirect('/blog')
});

Route::get('blog','BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost')

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
