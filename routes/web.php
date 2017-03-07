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


Route::get(
    'songs/category/{genre}',
    ['as' => 'genre', 'uses' => 'SimpleController@listSongsUnderCategory']
);
Route::get('showSong/{id}', ['as' => 'song', 'uses' => 'SimpleController@showSong']);
Route::resource('songs', 'SongController');
Route::get('/', 'SimpleController@showIndex');
Route::get('profile', 'HomeController@showProfile');
Route::get('allgenres', 'SimpleController@listGenres');
//Route::get('songs/category/{genre}/{id}', 'SongController');
//Route::controller();

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@showDashboard');