<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

Class Directors extends Model {

  protected $table ='directors';

  public static function allDirectors(){

    $resultat=DB::table('directors')->get();
    return $resultat;
  }
  /**
     * Methode qui enregistre en BDD mon film
     * @return [type] [description]
     */
    public static function storeData(Request $request){
      // Insert permet d'insérer un table
      DB::table('directors')->insert(
        [
          'id'           => $request->id,
          'firstname'    => $request->firstname,
          'lastname'     => $request->lastname,
          'dob'          => $request->dob,
          'image'        => $request->image,
          'biography'    => $request->biography,
          'note'         => $request->note_presse
        ]
      );
    }


}

 ?>
