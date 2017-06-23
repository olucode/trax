<?php

Route::get('/', 'SimpleController@showIndex');

Route::get(
    'songs/category/{genre}',
    ['as' => 'genre', 'uses' => 'SimpleController@listSongsUnderCategory']
);
Route::get('showSong/{id}', ['as' => 'song', 'uses' => 'SimpleController@showSong']);
Route::resource('songs', 'SongController');
Route::get('profile', 'HomeController@showProfile');
Route::get('allgenres', 'SimpleController@listGenres');
//Route::get('songs/category/{genre}/{id}', 'SongController');
//Route::controller();

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@showDashboard');