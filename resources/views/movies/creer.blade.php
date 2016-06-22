@extends('layout')

@section('content')

  <div class="row">
               <div class="col-lg-10 col-md-9">
<!--                        <div class="col-lg-1"><img src="img/ajout_contact.png" alt=""></div>-->
                   <h1 class="titre-contact">Création du formulaire de films</h1>
               </div>
               <div class="col-lg-2">
                   <form>
                       <input id= />
                   </form>
               </div>
           </div>
       </div>


       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="tableaudebord">
                       <div class="contact_container">
                           <div class="row">
                               <div class="col-lg-12 col-md-12">
                                   <h2></h2>

                                   <div class="nb_com" style="display:none">9</div>
                               </div>
                           </div>
                       </div>

                       <div class='container'>
                           <div class='row'>



                       <form action="{{route('movies.store')}}" method="post" class="form-horizontal" role="form">
                          {{csrf_field() }} <!--clé de sécurité-->
                           <div class='row'>
                               <div class="col-lg-12">
                                   <div class="titleprghp">
                                       <span class="prg"></span>
                                   </div>
                               </div>
                           </div>
                           <div class='row'>

                         <div class="col-lg-6">
                             <!--<form class="form-horizontal" role="form">-->
                             <div class="form-group">
                                 <label for="civilite" class="col-sm-2 control-label">Titre</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control" lname="civilite;" id="civilite">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="nom" class="col-sm-2 control-label">Synopsis</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control" placeholder="petit résumé..." name="Synopsis" id="name">
                                 </div>
                             </div>
                             <div class="form-group" >
                               <label for="prenom" class="col-sm-2 control-label">Image</label>
                                 <div class="col-sm-8">
                                   <input type="text" class="form-control"  placeholder="https//" name="prenom" id="prenom">
                                 </div>
                             </div>
                             <div class="form-group">
                                  <label for="prenom" class="col-sm-2 control-label">Description</label>
                                 <div class="col-sm-8">
                                     <textarea name="description" class="form-control" rows="10" cols="50" placeholder="quelques lignes..."></textarea>
                                  </div>
                             </div>
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">DATE DE SORTIE</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="dd/mm/YYYY" name="prenom" id="">
                                 </div>
                             </div>
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">BUDGET</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="en €" name="BUDGET" id="">
                                 </div>
                             </div>
                             <div class="form-group" >
                                 <label for="prenom" class="col-sm-2 control-label">duree</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="En NB HEURE" name="duree" id="">
                                 </div>
                             </div>
                             <div class="form-group" >
                                 <label for="BO" class="col-sm-2 control-label">BO</label>
                                 <div class="col-sm-8">
                                     <input type="text" class="form-control"  placeholder="VO" name="BO" id="BO">
                                 </div>
                             </div>
                             </div>

                             <!--                                    </form>-->
                         </div>

                     </div>
                     <div class="col-lg-12 col-xs-12">
                         <!--<form class="form-horizontal" role="form">-->

                         <label for="objectif" class="col-sm-2 col-xs-12 control-label">LANGUES*</label>

                           <INPUT type= "radio" name="langue" value="Anglais"> Anglais
                           <INPUT type= "radio" name="langue" value="Français"> Français
                           <INPUT type= "radio" name="langue" value="Italien"> Italien
                           <INPUT type= "radio" name="langue" value="espagnol"> Espagnol
                         <!--                                                </form>-->
                     </div>
                        <br />
                           <div class="col-lg-12">


                                   <!--<form class="form-horizontal" role="form">-->
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

                           </div>

                           </div>






                              </div>


                               <div class="col-lg-12 col-xs-12">
                                   <!--<form class="form-horizontal" role="form">-->


                                   <!--</form>-->
                               </div>
                               <!--<div class="checkbox">
                                   <label>
                                     <input type="checkbox"> Check me out
                                   </label>
                                 </div>-->
                           </div>
                       </div>
-->



                                       <div class="row">
                                           <div class="col-lg-12">
                                               <div class="boutton">
                                                   <div class="col-lg-7 col-md-7 hidden-md hidden-xs"></div>
                                                   <div class="col-lg-1 col-md-1 col-xs-12">
                                                       <button name="submit" id="cancel" type="reset" value="reset" class="btn btn-default">Cancel<span class="glyphicon glyphicon-remove"></span></button>
                                                   </div>
                                                   <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-12">
                                                       <button name="submit" id="submit" type="submit" value="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"></span>Envoyer le formulaire<span class="glyphicon glyphicon-chevron-right"></span></button>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                        </div>
                         </div>
                          </div>

  @endsection

  @section('arianne')
    @parent
    <li><a href="{{route('movies.creer') }}">Créer</a></li>
  @endsection
