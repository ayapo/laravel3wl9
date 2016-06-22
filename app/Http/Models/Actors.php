<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;

Class Actors extends Model {

  protected $table ='actors';

  public static function allActors(){

    $resultat=DB::table('actors')->get();
    return $resultat;
  }
}

 ?>
