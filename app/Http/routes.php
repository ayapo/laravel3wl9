<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as' =>'welcome', function () {
    return view('welcome');
}]);


//Route::get permet de créer une route en GET
//1ere paramètre c'est l'URI
//2eme paramètre est une fonction anonyme
Route::get('/about-us',['as' =>'about', function(){
  //derrière l'uri, on retourne vue
  return view('about');
}]);

Route::get('/contact', function(){
  //derrière l'uri, on retourne vue
  return view('contact');
});

Route::get('/faq', function(){
  //derrière l'uri, on retourne vue
  return view('faq');
});

Route::get('/concept', function(){
  //derrière l'uri, on retourne vue
  return view('concept');
});

Route::get('/ilsparlentdenous', function(){
  //derrière l'uri, on retourne vue
  return view('ilsparlentdenous');
});

Route::group([
  'prefix'=>'movies'], function(){
    Route::get('/index', ['as'=> 'movies.index', 'uses'=>'MoviesController@index']);


    Route::get('/creer', ['as'=> 'movies.creer', 'uses'=>'MoviesController@index']);

    Route::get('/editer', ['as'=> 'movies.editer', 'uses'=>'MoviesController@index']);

    Route::get('/voir', ['as'=> 'movies.voir', 'uses'=>'MoviesController@index']);

});

Route::group([
  'prefix'=>'categories'], function(){
    Route::get('/index', ['as'=> 'categories.index', 'uses'=>'CategoriesController@creer']);

    Route::get('/creer', ['as'=> 'categories.creer', 'uses'=>'CategoriesController@creer']);

    Route::get('/editer', ['as'=> 'categories.editer', 'uses'=>'CategoriesController@creer']);

    Route::get('/voir', ['as'=> 'categories.voir', 'uses'=>'CategoriesController@creer']);

});
