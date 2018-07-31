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
    return view('index');
});

Route::get('/readme', function () {
    return view('readme');
})->name('readme');

Route::get('/index_t', function () {
    return view('index_t');
})->name('index_t');

Route::get('upload', 'MusicScoreController@upload');
Route::post('save_score', 'MusicScoreController@save_score');
Route::get('api', function () {
    return view('api');
});

Route::get('csv_sample', function () {
    return response()->download('storage/app/public/sample.csv');
});

Route::resource('music', 'MusicController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
