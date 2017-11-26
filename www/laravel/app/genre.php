<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //

    /**
     * this gets all the genres from the genres table.
     */

    public static function getAllGenres() {
        $genres = Genre::all();
        
        return $genres;
    }

     /**
     * this gets a genre by id from the genres table.
     */

    public static function getGenreByID($id) {
        $genrebyid = Genre::where('id', '=', $id)->first();
        return $genrebyid;
    }
}
