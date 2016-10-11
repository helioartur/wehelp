<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/auth/google','Auth\RegisterController@googleRedirectToProvider') ;
Route::get('/auth/google/callback','Auth\RegisterController@googleHandleProviderCallback') ;

Route::GET('cause/publish/{cause}', 'Cause\CauseController@publish');
Route::resource('auth/profile', 'Auth\ProfileController');
// usage inside a laravel route
Route::post('upload','Auth\ProfileController@update_avatar');	



Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
Route::resource('auth/profile', 'Auth\ProfileController');


Route::group(['middleware' => ['web']], function(){
    Route::resource('causes',  'Cause\CauseController');
	Route::resource('causeowners', 'Cause\CauseOwnersController');
	Route::resource('causehelpers', 'Cause\CauseHelpersController');
	Route::resource('causecontribution', 'Cause\CauseContributionController');
	Route::resource('cause/{cause}/result', 'Cause\CauseResultController');
	Route::resource('cause_result', 'Cause\CauseResultController');
	Route::resource('document', 'DocumentController');
	Route::resource('document/upload', 'DocumentController@multiple_upload');
});

