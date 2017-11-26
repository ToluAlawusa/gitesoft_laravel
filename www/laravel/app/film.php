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
        $films = Film::with('rating', 'genre')->paginate(1);
        
        return $films;
    }

    public static function getAllFilmsApi() {
        $films = Film::with('rating', 'genre')->paginate(1);
        
        return response()->json($films);
    }

     /**
     * this gets a film by id from the films table.
     */

    public static function getFilmByID($id) {
        $filmbyid = Film::where('id', '=', $id)
                        ->with('rating', 'genre')
                        ->first();
        return $filmbyid;
    }

     /**
     * this gets a film by name from the films table.
     */

    public static function getFilmByName($name) {
        $filmbyname = Film::where('slug_name', '=', $name)
                            ->with('rating', 'genre')
                            ->first();
        return $filmbyname;
    }

    public static function getFilmByNameApi($name) {
        $filmbyname = Film::where('slug_name', '=', $name)
                            ->with('rating', 'genre')
                            ->first();

        return response()->json($filmbyname);
    }


    /**
     * the below-listed classes defines relationships between tables.
     */
    public function rating() {
       
        return $this->belongsTo('App\Rating');
    }
    
    public function genre() {
       
        return $this->belongsTo('App\Genre');
    }

    public function comment() {
       
        return $this->hasMany('App\Comment');
    }
}
