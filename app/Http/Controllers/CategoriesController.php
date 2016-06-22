<?php

namespace App\Http\Controllers;

use App\Http\Models\Categories;
use App\Http\Controllers\Controller;


/**
 * Class CategoriesController
 */
class CategoriesController extends Controller
{

  public function index(){
//interoger ma BDD avec le Model

//Je récupère la liste de mes films
//depuis le Model Movies
  $categories = Categories::allCategories();

//J'appelle ma vue en lui transférant tous mes films
    return view('categories/index', ['categories'=> $categories]);

  }


}

 ?>
