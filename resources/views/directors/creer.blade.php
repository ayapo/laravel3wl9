@extends('layout')

@section('content')

  @section('css')
    @parent
    <link rel="stylesheet" href="{{asset('css/formulaire.css')}}" media="all" title="no title" charset="utf-8">
  @endsection


  <h1 class="titre-contact">Création du formulaire réalisateurs</h1>

  <!-- Début de mon formulaire -->
  <form action="{{route('directors.store')}}" method="post" class="form-horizontal" role="form">
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
                 <label for="firstname" class="col-sm-2 control-label">Prénom</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="firstname" id="firstname">
                 </div>
             </div>

   <!--<Groupe du synopsis-->
             <div class="form-group">
                 <label for="lastname" class="col-sm-2 control-label">Nom</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control"  name="lastname" id="lastname">
                 </div>
             </div>

   <!--<Groupe du Image-->
             <div class="form-group" >
               <label for="image" class="col-sm-2 control-label">Portrait</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control"  placeholder="https//" name="image" id="image">
                 </div>
             </div>

   <!--<Groupe du Description-->
             <div class="form-group">
                  <label for="biography" class="col-sm-2 control-label">Biographie</label>
                 <div class="col-sm-8">
                     <textarea name="biography" id="biography" class="form-control" rows="10" cols="50" placeholder="quelques lignes..."></textarea>
                  </div>
             </div>


    <!--<Groupe du Date de sortie-->
             <div class="form-group" >
                 <label for="dob" class="col-sm-2 control-label">Date de Naissance</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control"  placeholder="dd/mm/YYYY" name="dob" id="dob">
                 </div>
             </div>

   <!--<Groupe du Budget-->
             <div class="form-group" >
                 <label for="note_presse" class="col-sm-2 control-label">Note de presse</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control"  placeholder="note de presse" name="note_presse" id="note_presse">
                 </div>
             </div>



       <!--groupe radio pour les langues-->
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
    <li><a href="{{route('directors.creer') }}">Créer</a></li>
  @endsection
