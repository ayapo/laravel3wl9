@extends('layout')

@section('content')

  @section('css')
    @parent
    <link rel="stylesheet" href="{{asset('css/formulaire.css')}}" media="all" title="no title" charset="utf-8">
  @endsection

<!--                        <div class="col-lg-1"><img src="img/ajout_contact.png" alt=""></div>-->
<h1 class="titre-contact">Création du formulaire de films</h1>

                  <form action="{{route('movies.store')}}" method="post" class="form-horizontal" role="form">
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
                                 <label for="civilite" class="col-sm-2 control-label">Titre</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control" name="titre" id="civilite">
                                 </div>
                             </div>

                           <!--<Groupe du synopsis-->
                             <div class="form-group">
                                 <label for="nom" class="col-sm-2 control-label">Synopsis</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control" placeholder="petit résumé..." name="synopsis" id="name">
                                 </div>
                             </div>

                           <!--<Groupe du Image-->
                             <div class="form-group" >
                               <label for="prenom" class="col-sm-2 control-label">Image</label>
                                 <div class="col-sm-8">
                                   <input type="text" class="form-control"  placeholder="https//" name="image" id="prenom">
                                 </div>
                             </div>

                           <!--<Groupe du Description-->
                             <div class="form-group">
                                  <label for="prenom" class="col-sm-2 control-label">Description</label>
                                 <div class="col-sm-8">
                                     <textarea name="description" class="form-control" rows="10" cols="50" placeholder="quelques lignes..."></textarea>
                                  </div>
                             </div>


                            <!--<Groupe du Date de sortie-->
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">DATE DE SORTIE</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="dd/mm/YYYY" name="date_sortie" id="">
                                 </div>
                             </div>

                           <!--<Groupe du Budget-->
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">BUDGET</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="en €" name="budget" id="">
                                 </div>
                             </div>

                            <!--<Groupe du durée du film-->
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">duree</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="En NB HEURE" name="duree" id="">
                                 </div>
                             </div>

                           <!--<Groupe du BO-->
                              <div class="form-group" >
                                 <label for="BO" class="col-sm-2 control-label">BO</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="VO" name="bo" id="BO">
                                 </div>
                               </div>

                            </div><!--fin de la classe col 6-->

                           <!--   </form>-->
                       </div><!-- fin de l'ensemble des groupes-->

                         <!--<groupe pour les bouton -->
                        <div class="col-lg-12 col-xs-12">
                             <label for="objectif" class="col-sm-2 col-xs-12 control-label">LANGUES*</label>
                             <INPUT type= "radio" name="langue" value="Anglais"> Anglais
                             <INPUT type= "radio" name="langue" value="Français"> Français
                             <INPUT type= "radio" name="langue" value="Italien"> Italien
                             <INPUT type= "radio" name="langue" value="espagnol"> Espagnol
                           <!--                                                </form>-->
                         </div>

                        <br />

                        <!--groupe select pour les versions des films-->
                           <div class="col-lg-12">
                                <div class="form-group">
                                   <label for="programme" class="col-sm-2 control-label">Programme</label>
                                   <div class="col-sm-4">
                                       <select class="form-control">
                                           <option>VF</option>
                                           <option>VO</option>
                                           <option>VOSTFR</option>
                                           <option>VOST</option>
                                           <option>JAP</option>
                                       </select>
                                   </div>
                               </div>
                           </div><!-- fin du select pour les versions -->

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
                           </div><!--fin du groupe submit-->
                         </form>


  @endsection

  @section('arianne')
    @parent
    <li><a href="{{route('movies.creer') }}">Créer</a></li>
  @endsection
