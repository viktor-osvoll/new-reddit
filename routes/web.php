<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy')->middleware('auth');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
