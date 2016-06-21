<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;


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


}

 ?>
