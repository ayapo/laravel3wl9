<?php
namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use DB;

Class Categories extends Model {

  protected $table ='categories';

  public static function allCategories(){

    $resultat=DB::table('categories')->get();
    return $resultat;
  }
}

 ?>
