<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


Class Categories extends Model {

  protected $table ='categories';

  public static function allCategories(){

    $resultat=DB::table('categories')->get();
    return $resultat;
  }


//méthode qui enregistre en base de données mon film
public static function storeData(Request $request){
  DB::table('categories')->insert(
  [
    'title'        =>$request->titre,
    'slug'         =>$request->slug,
    'description'  =>$request->description,
      ]
    );
  }

}

 ?>
