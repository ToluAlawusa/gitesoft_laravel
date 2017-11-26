<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rating;
use App\Genre;
use App\Comment;

class Film extends Model
{
    //

    /**
     * this gets all the films from the films table, eager loading the Rating and Genre tables
       with it, also paginates the result.
     */

    public static function getAllFilms() {
        $films = Film::with('Rating', 'Genre')->paginate(1);
        
        return $films;
    }

     /**
     * this gets a film by id from the films table.
     */

    public static function getFilmByID($id) {
        $filmbyid = Film::where('id', '=', $id)->first();
        return $filmbyid;
    }

     /**
     * this gets a film by name from the films table.
     */

    public static function getFilmByName($name) {
        $filmbyname = Film::where('name', '=', $name)->first();
        return $filmbyname;
    }


    /**
     * the below-listed classes defines relationships between tables.
     */
    public function Rating() {
       
        return $this->belongsTo('App\Rating');
    }
    
    public function Genre() {
       
        return $this->belongsTo('App\Genre');
    }

    public function Comment() {
       
        return $this->hasMany('App\Comment');
    }
}
