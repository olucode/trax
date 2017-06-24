<?php

namespace App\Http\Controllers;

use App\Song;
use App\Genre;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    /**
     * Display Homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function showIndex()
    {
        $songs = Song::orderBy('id', 'desc')->paginate(4);   //returns a Collection(object)
        return view('trax.index')->with('songs', $songs);
    }

    /**
     * Display all the genres available
     * @return \Illuminate\Http\Response
     */
    public function listGenres()
    {
        $genres = Genre::all();
        return view('trax.showGenre', compact('genres'));
    }

    public function listSongsUnderCategory($genre)
    {
        $songs = Song::where('genre', $genre)->paginate(6);  //returns a Collection (object)
        return view('trax.allSongsUnderGenre', compact(['songs', 'genre']));
    }

    public function showSong($id)
    {
        $song = Song::find($id);  //returns Collection 
        //$song = Song::where('title', '=', $id)->get();
        return view('layouts.song', compact('song'));
    }

}
