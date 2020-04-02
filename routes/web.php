<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create','PostController@create')->name('posts.create')->middleware('auth');;
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy')->middleware('auth');;
Route::post('/addimage', 'PostController@store')->name('addimage');
Route::get('/editimage/{id}', 'PostController@edit')->middleware('auth');;
Route::put('/updateimage/{id}', 'PostController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
