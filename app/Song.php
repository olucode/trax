<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	
    protected $fillable = [
    	'title', 
    	'artist', 
    	'album_id', 
    	'year',
    	'producer', 
    	'comment', 
    	'genre_id', 
    	'image'
    ];

    public function album(){
    	return $this->belongsTo(Album::class);
    }

    public function genre(){
    	return $this->belongsTo(Genre::class);
    }

}