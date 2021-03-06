<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

Class Actors extends Model {

  protected $table ='actors';

  public static function allActors(){

    $resultat=DB::table('actors')->get();
    return $resultat;
  }
  /**
     * Methode qui enregistre en BDD mon film
     * @return [type] [description]
     */
    public static function storeData(Request $request){
      // Insert permet d'insérer un table
      DB::table('actors')->insert(
        [
          'id'           => $request->id,
          'firstname'    => $request->firstname,
          'lastname'     => $request->lastname,
          'dob'          => $request->dob,
          'image'        => $request->image,
          'biography'    => $request->biography,
          'recompenses'  => $request->note
        ]
      );
    }


}

 ?>
