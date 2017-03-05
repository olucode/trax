<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::paginate(12);
        //return $songs;
        return view('songs.editAllSongs',compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "hello";
        return view('songs.create');
    }

    /**
     * Store a newly created song in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newSong = $request->all(); //get all form input
        $rules = [
        'title' => 'required',
        'artist' => 'required',
        'year' => 'required|numeric',
        'producer' => 'required'
        ];  //validation rules
        $validator = Validator::make($newSong,$rules);
        if ($validator->fails()) {
            return redirect('/songs/create')->withErrors($validator)->withInput();
        }
        else {
            //return $request->file('image');
            $randomNumber = rand(1, 10000); //get any random number
            $file = $request->file('image');
            //$fileName = $randomNumber . '' . $file->getClientOriginalName(); //change the filename by appending the random number to the original file name
            //$file->storeAs('images', $fileName);   //store file on server
            $fileName = $request->file('image')->store('images');
            $data = [
                'title' => $newSong['title'],
                'artist' => $newSong['artist'],
                'album' => $newSong['album'],
                'year' => $newSong['year'],
                'producer' => $newSong['producer'],
                'comment' => $newSong['comment'],
                'genre' => $newSong['genre'],
                'image' => $fileName
            ];
            Song::create($data);
            //return "Successful";
            //return redirect('songs');

            return view('trax.addSongSuccess', compact('data'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //I'm using SImpleController@showSong since a user doesn't have to be logged in to view a song
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id); //returns instance(object)
        return view('songs.editSong', compact('song'));
        //return "Tomorrow!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        }
        else{
            Song::find($id)->update($updatedSong); //update the song           
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}