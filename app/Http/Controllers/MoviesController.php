<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


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


//unuque permet d'eviter la répition d'un titre ou autre chose
$validator = Validator::make($request->all(),[
  'titre'=>'required|min:10|max:255|alpha_num|unique:movies,title',
  'synopsis'=>'required|min:10|max:255',
  'description'=>'required|min:10|max:255',
  'image'=>'required|url',
  'date_sortie'=>'required|date_format:d/m/Y|after:now',
  //'languages'=>'required|in:fr,en,it',
  'duree'=>'required|integer|between:1,5',//integer valide les nombres entiers, between de 1 à 5heures
  'budget'=>'required|integer|between:1000, 1000000',
  'bo'=>'required|in:vo,vost,vostfr',
],[
  'titre.unique'=>'votre titre de film est déjà pris',
  'titre.min'=>'votre titre de film est trop court',
  'titre.max'=>'votre titre de film est trop long',
  'image.required'=>'votre titre de film est trop long',
  'image.url'=>"L'URL saisie n'est pas valide",
]);

//si le validator échoue
if($validator->fails()){

  //redirection
  return redirect()->route('movies.creer')
    ->withErrors($validator) // message erreur
    ->withInput(); //remplissage de nos champs
}

      Movies::storeData($request);

      //redirection vers la page index
        return redirect()
        ->route('movies.index')
        ->with ('success', 'votre formulaire a correctement été envoyé');
        //with()permet d'ecrire un message flash
  }
}

 ?>
