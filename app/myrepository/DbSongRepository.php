<?php

namespace myrepository;

use App\Song;

class DbSongRepository implements SongRepositoryInterface{
    public function showAll()
    {
        // TODO: Implement showAll() method.
        return Song::paginate(9);
    }

}