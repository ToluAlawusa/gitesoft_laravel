<?php
 
namespace App\Http\Controllers;
 
use App\Film;
use App\Comment;
use App\User;
use App\Genre;
use App\Rating;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
 
class FilmController extends Controller{

	public function showAllFilms(){

		$allFilms  = Film::getAllFilms();

		if (!$allFilms) {
			return response()->json(['There are no films, add some.']);
		}

		return $allFilms;
	}

    public function showAllFilmsApi(){

        $allFilms  = Film::getAllFilmsApi();

        if (!$allFilms) {
            return response()->json(['There are no films, add some.']);
        }

        return $allFilms;
    }

	public function showFilmByName($name){

		$filmByName = Film::getFilmByName($name);

		if (!$filmByName) {
			return response()->json(['Film titled: ' .$name. 'does not exist, search for another']);
		}
 
    	return $filmByName;
 
	}

	public function showFilmViews(){
		
		return view('films', ['payload' => $this->showAllFilms()]);
	}

	public function showFilmViewBySlugName($name) {

		$film = $this->showFilmByName($name);
		
    
        return view('filmpreview', ['film' => $this->showFilmByName($name), 'filmcomments'=>Comment::getCommentByID($film->id)]);
    
    }

    public function doAddComments(Request $request, $name) {

    	$film = $this->showFilmByName($name);

        if(Session::has("user_id")) {

            $udd = Session::get("user_id");

            $details = User::getusersbyID($udd)->first();


            $comment = new Comment();

            $comment->user_id = $details->id;
            $comment->film_id = $film->id ;
            $comment->text = $_REQUEST['comm'];
            $comment->save();

            return view('filmpreview', ['filmcomments'=>Comment::getCommentByID($film['id']), 'film' => $this->showFilmByName($name)]);

        } 

            return redirect()->route('login')->with(['fail' => 'Please enter login credentials']);
   
    }

    public function createFilmForm() {

          return view('createfilm', ['genre'=>Genre::getAllGenres(), 'rating'=>Rating::getAllRatings()]);
	}

    public function createFilm(Request $request) {

       $this->validate($request, [
            'name' => 'required',
             'slug_name' => 'required',
             "description" => 'required',
             "release_date" => 'required',
             "rating" => 'required',
             "price" => 'required',
             "country" => 'required',
             "genre" => 'required',
             "photo" => 'required'
        ]);

        $rnd = uniqid(rand(0, 9), true);
        $imageName = $rnd . '.'.$request->file('photo')->getClientOriginalExtension();

        $request->file('photo')->move(
        base_path() . '/public/uploads/', $imageName
        );

        
         $film = new Film();
         $film->name = $request['name'];
         $film->slug_name = $request['slug_name'];
         $film->description = $request['description'];
         $film->release_date = $request['release_date'];
         $film->rating_id = $request['rating'];
         $film->ticket_price = $request['price'];
         $film->country = $request['country'];
         $film->genre_id = $request['genre'];
         $film->photo = $imageName;
         
         $film->save();

            
        return redirect()->back()->with(['success' => 'film successfully created']);
    }



}
