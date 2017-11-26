<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //

    /**
     * this gets all the ratings from the ratings table.
     */

    public static function getAllRatings() {
        $ratings = Rating::all();
        
        return $ratings;
    }

     /**
     * this gets a rating by id from the ratings table.
     */

    public static function getRatingByID($id) {
        $ratingbyid = Rating::where('id', '=', $id)->first();
        return $ratingbyid;
    }
}
