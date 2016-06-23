<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


Class Movies extends Model {

  protected $table ='movies';

  public static function allMovies(){

    $resultat=DB::table('movies')->get();
    return $resultat;
  }


//méthode qui enregistre en base de données mon film
public static function storeData(Request $request){
  DB::table('movies')->insert(
  [
    'title'        =>$request->titre,
    'synopsis'     =>$request->synopsis,
    'description'  =>$request->description,
    'date_release' =>$request->date_de_sortie,
    'languages'    =>$request->langues,
    'budget'       =>$request->budget,
    'bo'           =>$request->bo,
    'duree'        =>$request->duree,
    'image'        =>$request->image
      ]
    );
  }

}

 ?>
