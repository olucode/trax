<?php

namespace App\Http\Controllers;

use App\Song;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateSong;
use App\Http\Requests\UpdateSong;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $songs = Song::paginate(9);
        //return $songs;
        return view('songs.editAllSongs', compact('songs'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('songs.create', compact('genres'));
    }

    public function store(ValidateSong $request)
    {

        $newSong = $request->all(); //get all form input
        $fileName = $request->file('image')->store('images');
        $newSong['image'] = $fileName;
        $song = Song::create($newSong);
        //Flash session data
        session()->flash('success', 'The Song was successfuly added to the Trax Library');
        session()->flash('songId', $song->id);

        return redirect()->route('songs.create');

    }

    public function edit(Song $song)
    {
        $genres = Genre::all();
        return view('songs.editSong', compact(['song', 'genres']));
        //return "Tomorrow!";
    }

    public function update(UpdateSong $request, Song $song)
    {

        $updatedSong = $request->all(); //get all form input

        if ($request->hasFile('image')){
            $fileName = $request->file('image')->store('images');
            $updatedSong['image'] = $fileName;
        }
        
        // dd($updatedSong);
        $song->update($updatedSong);

        return redirect()->route('song', $song->id);

    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect('/');
    }
}
