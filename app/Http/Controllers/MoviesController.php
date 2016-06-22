<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class MoviesController
 */
class MoviesController extends Controller
{

  public function index(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $movies = Movies::allMovies();

//J'appelle ma vue en lui transférant tous mes films
    return view('movies/index', ['movies'=> $movies]);

  }
  public function creer(){
//interoger ma BDD avec le Model
    //dump ($movies); pour débuger!
//J'appelle ma vue en lui transférant tous mes films
    return view('movies/creer');

  }


/*enregister mes données dans mon formulaire*/
public function store(Request $request){

      Movies::storeData($request);

      //redirection vers la page index
        return redirect()->route('movies.index');
  }
}

 ?>
