<?php

Route::get('/', 'SimpleController@showIndex');

Route::get(
    'songs/genre/{genre}',
    ['as' => 'genre', 'uses' => 'SimpleController@listSongsUnderCategory']
);
Route::get('showSong/{id}', ['as' => 'song', 'uses' => 'SimpleController@showSong']);
Route::get('profile', 'HomeController@showProfile');
Route::get('allgenres', 'SimpleController@listGenres');
//Route::get('songs/category/{genre}/{id}', 'SongController');

Route::resource('songs', 'SongController');
Route::resource('genres', 'GenreController');

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@showDashboard');