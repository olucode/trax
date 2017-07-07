<?php

Route::get('/', 'SimpleController@showIndex');

Route::get(
    'allgenres/{genre}',
    ['as' => 'songsUnderGenre', 'uses' => 'SimpleController@listSongsUnderGenre']
);
Route::get('showSong/{id}', ['as' => 'song', 'uses' => 'SimpleController@showSong']);
Route::get('profile', 'HomeController@showProfile');
Route::get('allgenres', 'SimpleController@listGenres');
//Route::get('songs/category/{genre}/{id}', 'SongController');

Route::resource('songs', 'SongController', ['except' => ['show']]);
Route::resource('genres', 'GenreController');

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@showDashboard');