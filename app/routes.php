<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', 'HomeController@showLogin');

Route::get('about', function() {
    return View::make('about');
});

Route::get('contact', 'PagesController@contact');

Route::resource('users', 'UsersController');
Route::resource('album', 'AlbumController@index');
Route::resource('posts', 'PostsController');

//Route::resource('signin', 'UsersController@signin');
/* Route::resource('login', 'UsersController@login'); */


Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::get('logout', 'HomeController@destroy');

Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('admin', function() {
  return View::make('album_create');
});

Route::resource('album_create', 'AlbumController');





//Route::get('logout', array('as' => 'logout', function () {
//    Auth::logout();
//     return View::make('album_create');
//
//    return Redirect::route('login')
//        ->with('flash_notice', 'You are successfully logged out.');
//}))->before('auth');
