<?php

namespace App\Http\Controllers;

use App\Song;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateSong;
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
        //return "hello";
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

    public function edit($id)
    {
        $song = Song::find($id); //returns instance(object)
        return view('songs.editSong', compact('song'));
        //return "Tomorrow!";
    }

    public function update(Request $request, $id)
    {

        $updatedSong = $request->all(); //get all form input
        $rules = [
            'title' => 'required',
            'artist' => 'required',
            'year' => 'required|numeric',
            'producer' => 'required'
        ];  //validation rules
        $validator = Validator::make($updatedSong,$rules);
        if ($validator->fails()) {
            return "Did not pass";
            //return redirect()->route('songs.edit',$id)->withErrors($validator);
        } else{
            
            $song = Song::find($id);
            if ($updatedSong->hasFile('image')) {
                $randomNumber = rand(1,10000); //get any random number
                $file = $request->image;
                $fileName = $randomNumber.''.$file->getClientOriginalName();
                $file->storeAs('images',$fileName);
                $song->image = $fileName;
            }
            $song->save();
            return "Successful";
        }

    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect('/');
    }
}