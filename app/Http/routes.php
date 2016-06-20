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

Route::get('/', function () {
    return view('welcome');
});


//Route::get permet de créer une route en GET
//1ere paramètre c'est l'URI
//2eme paramètre est une fonction anonyme
Route::get('/about-us', function(){
  //derrière l'uri, on retourne vue
  return view('about');
});

Route::get('/contact', function(){
  //derrière l'uri, on retourne vue
  return view('contact');
});

Route::get('/faq', function(){
  //derrière l'uri, on retourne vue
  return view('faq');
});
