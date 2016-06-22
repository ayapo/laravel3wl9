<?php

namespace App\Http\Controllers;

use App\Http\Models\Actors;
use App\Http\Controllers\Controller;


/**
 * Class MoviesController
 */
class ActorsController extends Controller
{

  public function index(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $actors = Actors::allActors();

//J'appelle ma vue en lui transférant tous mes films
    return view('actors/index', ['actors'=> $actors]);

  }


}

 ?>
