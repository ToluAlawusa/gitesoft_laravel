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

Route::group(['middleware' => ['web']], function (){
    

	 

     Route::get('/registration', [
        'uses' => 'UserController@showRegistration',
        'as' => 'registration'
    ]);


     Route::post('/registration', [
        'uses' => 'UserController@doRegistration',
        'as' => 'registration'
    ]);
    

    Route::get('/login', [
        'uses' => 'UserController@showLogin',
        'as' => 'login'
    ]);


     Route::post('/login', [
        'uses' => 'UserController@doLogin',
        'as' => 'login'
    ]);

    Route::get('/films', [
        'uses' => 'FilmController@showFilmViews',
        'as' => 'films'
    ]);

    Route::get('/films/{name}/', [
        'uses' => 'FilmController@showFilmViewBySlugName',
        'as' => 'filmpreview'
    ]);
    
    Route::post('/films/{name}/', [
        'uses' => 'FilmController@doAddComments',
        'as' => 'filmpreview'
    ]);

    Route::get('/films-create', [
        'uses' => 'FilmController@createFilmForm',
        'as' => 'createfilm'
    ]);
    
    Route::post('/films-create', [
        'uses' => 'FilmController@createFilm',
        'as' => 'createfilm'
    ]);  

    Route::get('/logout', [
        'uses' => 'UserController@doLogout',
        'as' => 'logout'
    ]);

     
});
