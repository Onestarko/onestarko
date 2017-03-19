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
    return view('onestarko/home');
});


Route::any('index',['uses'=>'OnestarkoController@index']);

Route::any('message',['uses'=>'OnestarkoController@message']);


Route::any('mess',function(){
    return view('onestarko.mess');
});

Route::any('mess2',function(){
    return view('onestarko.mess2');
});

Route::any('showmessage',['uses'=>'OnestarkoController@showmessage']);

Route::any('writearticle',['uses'=>'OnestarkoController@writearticle']);

Route::any('readarticle',['uses'=>'onestarkoController@readarticle']);

Route::any('article/{id}',['uses'=>'onestarkoController@article']);

Route::any('music',['uses'=>'onestarkoController@music']);

Route::any('info',['uses'=>'onestarkoController@info']);

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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
