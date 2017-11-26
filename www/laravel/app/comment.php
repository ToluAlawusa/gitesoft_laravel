<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Film;
use App\User;

class Comment extends Model
{
    //

    /**
     * this gets all the comments from the comments table, eager loading the films table with it.
     */

    public static function getAllComments() {
        $comments = Comment::with('Film')->get();
        
        return $comments;
    }

     /**
     * this gets a comment by id from the comments table.
     */

    public static function getCommentByID($id) {
        $commentbyid = Comment::where('film_id', '=', $id)
        						->with('user', 'film')
        						->get();

          if($commentbyid != null) {
	        return $commentbyid;

		      } else {
		        return false;
	      }

    }

    /**
     * the below-listed class defines relationships between tables.
     */
    public function film() {
       
        return $this->belongsTo('App\Film');
    }

    public function user() {
       
        return $this->belongsTo('App\User');
    }
    


}
