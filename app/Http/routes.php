<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Route;


Route::get('/','ValidateController@index');
Route::post('validation','ValidateController@store');

Route::get('blog', function () {
    return view('blog');
});

Route::get('foodie', function () {
    return view('foodie');
});

Route::get('events', function () {
    return view('events');
});

Route::get('contact', function() {
    return view('contact');
});

Route::get('adventure', function() {
    return view('adventure');
});


Route::get('insert','StoreDataController@insertform');
Route::post('create','StoreDataController@insert');
Route::get('blog','StoreDataController@index');
Route::get('blog/fetch_image1/{id}', 'StoreDataController@fetch_image1');
Route::get('blog/fetch_image2/{id}', 'StoreDataController@fetch_image2');
Route::get('blog/fetch_image3/{id}', 'StoreDataController@fetch_image3');
Route::get('blog/fetch_image4/{id}', 'StoreDataController@fetch_image4');

Route::get('contact','CommentController@index');
Route::post('store','CommentController@store');
Route::get('contact','CommentController@show');

Route::get('foodie','StoreDataController@index_foodie');
Route::get('foodie/fetch_image1/{id}', 'StoreDataController@fetch_image1');
Route::get('foodie/fetch_image2/{id}', 'StoreDataController@fetch_image2');
Route::get('foodie/fetch_image3/{id}', 'StoreDataController@fetch_image3');
Route::get('foodie/fetch_image4/{id}', 'StoreDataController@fetch_image4');

Route::get('events','StoreDataController@index_event');
Route::get('events/fetch_image1/{id}', 'StoreDataController@fetch_image1');
Route::get('events/fetch_image2/{id}', 'StoreDataController@fetch_image2');
Route::get('events/fetch_image3/{id}', 'StoreDataController@fetch_image3');
Route::get('events/fetch_image4/{id}', 'StoreDataController@fetch_image4');

Route::get('adventure','StoreDataController@index_travel');
Route::get('adventure/fetch_image1/{id}', 'StoreDataController@fetch_image1');
Route::get('adventure/fetch_image2/{id}', 'StoreDataController@fetch_image2');
Route::get('adventure/fetch_image3/{id}', 'StoreDataController@fetch_image3');
Route::get('adventure/fetch_image4/{id}', 'StoreDataController@fetch_image4');


