<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;

Class Movies extends Model {

  protected $table ='movies';

  public static function allMovies(){

    $resultat=DB::table('movies')->get();
    return $resultat;
  }
}

 ?>
