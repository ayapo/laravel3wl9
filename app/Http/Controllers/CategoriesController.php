<?php

namespace App\Http\Controllers;

use App\Http\Models\Categories;
use App\Http\Controllers\Controller;


/**
 * Class MoviesController
 */
class CategoriesController extends Controller
{

  public function creer(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $categories = Categorie::allCategories();

//J'appelle ma vue en lui transférant tous mes films
    return view('categories/creer', ['categories'=> $categories]);

  }


}

 ?>
