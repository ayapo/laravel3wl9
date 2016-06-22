<?php

namespace App\Http\Controllers;

use App\Http\Models\Directors;
use App\Http\Controllers\Controller;


/**
 * Class MoviesController
 */
class DirectorsController extends Controller
{

  public function index(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $directors = directors::allDirectors();

//J'appelle ma vue en lui transférant tous mes films
    return view('directors/index', ['directors'=> $directors]);

  }


}

 ?>
