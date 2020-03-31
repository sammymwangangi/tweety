<?php

//DB::listen(function ($query) { var_dump($query->sql, $query->bindings);});

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');
});

Route::get('profiles/{user}', 'ProfilesController@show')->name('profile');

Auth::routes();
