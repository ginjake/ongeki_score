<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('posts/index/{category?}', 'PostController@index');
//Route::get('score/{name?}', 'MusicScoreController@index');
Route::get('score', 'MusicScoreController@index');
Route::get('upload', 'MusicScoreController@upload');
Route::post('save_score', 'MusicScoreController@save_score');

Route::resource('music', 'MusicController');
Route::get('music_update', 'MusicController@update');
Route::post('music_update', 'MusicController@update');
//Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
