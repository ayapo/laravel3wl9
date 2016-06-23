@extends('layout')

@section('content')

  @section('css')
    @parent
    <link rel="stylesheet" href="{{asset('css/formulaire.css')}}" media="all" title="no title" charset="utf-8">
  @endsection


  <h1 class="titre-contact">Création du formulaire catégories</h1>

  <!-- Début de mon formulaire -->
  <form action="{{route('categories.store')}}" method="post" class="form-horizontal" role="form">
          {{csrf_field() }} <!--clé de sécurité-->
      <div class='row'>
         <div class="col-lg-12">
               <div class="title">
                   <span class="prg"></span>
               </div>
           </div>
      </div>
      <div class='row'>
         <div class="col-lg-6">

   <!--<Groupe du titre-->
             <div class="form-group">
                 <label for="titre" class="col-sm-2 control-label">Titre</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="titre" id="titre">
                 </div>
             </div>

   <!--<Groupe du Genre-->
             <div class="form-group">
                 <label for="slug" class="col-sm-2 control-label">Genre</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control"  name="slug" id="slug">
                 </div>
             </div>



   <!--<Groupe du Description-->
             <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                 <div class="col-sm-8">
                     <textarea name="description" id="description" class="form-control" rows="10" cols="50" placeholder="quelques lignes..."></textarea>
                  </div>
             </div>


           <div class="row">
               <div class="col-lg-12">
                   <div class="boutton">
                       <div class="col-lg-7 col-md-7 hidden-md hidden-xs"></div>
                       <div class="col-lg-1 col-md-1 col-xs-12">
                           <button name="submit" id="cancel" type="reset" value="reset" class="btn btn-warning">Cancel<span class="glyphicon glyphicon-remove"></span></button>
                       </div>
                       <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-12">
                           <button name="submit" id="submit" type="submit" value="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Envoyer le formulaire<span class="glyphicon glyphicon-chevron-right"></span></button>
                       </div>
                   </div>
               </div>
           </div> <!--fin du groupe submit-->
         </form> <!--Fin du formulaire -->


  @endsection

  @section('arianne')
    @parent
    <li><a href="{{route('categories.creer') }}">Créer</a></li>
  @endsection
