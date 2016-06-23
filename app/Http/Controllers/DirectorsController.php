<?php

namespace App\Http\Controllers;

use App\Http\Models\Directors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class MoviesController
 */
class DirectorsController extends Controller
{

  public function index(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $directors = Directors::allDirectors();

//J'appelle ma vue en lui transférant tous mes films
    return view('directors/index', ['directors'=> $directors]);

  }
  public function creer()
  {
   // Intéroge ma bdd avec le model
   return view('directors/creer');
  }
  /**
  * Enregistre mes données depuis mon formulaire d'ajout de film
  * réception des données de mon formulaire une fois envoyé
  * [store]
  * @return [type] [description]
  */
  public function store(Request $request){
   // Appel de mon modele Actors de sa méthode store
   Directors::storeData($request);
   // redirection vers la page jeux
   return redirect()->route('directors.index');
  }
  /**
  * Pages edition d'un acteur
  * @retun vue editer
  */
  public function editer()
  {
   // Intéroge ma bdd avec le model
   return view('directors/editer');
  }
  /**
  * Pages pour voir un acteur
  * @retun vue voir
  */
  public function voir()
  {
   // Intéroge ma bdd avec le model
   return view('directors/voir');
  }

}

 ?>
