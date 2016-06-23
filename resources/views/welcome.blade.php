


@extends('layout')
@section('css')
  @parent
  <link rel="stylesheet" href="{{asset('css/main.css')}}" media="all" title="no title" charset="utf-8">
@endsection


@section('metadesc') @parent-  Pade d'acceuil @endsection
@section('titrePage') @parent - Backoffice @endsection






  @section('content')

    <h2 class="">Dashboard</h2>
    <div class="contenair">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Menu Déroulant
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <ul class="list-group">
            <li class="list-group-item list-group-item-success"><a href= "{{route('movies.index')}}"class="list-group-item"> Ajout de film</a></li>
            <li class="list-group-item list-group-item-success"><a href= "{{route('categories.index')}}"class="list-group-item">Ajout de catégories</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route('actors.index')}}" class="list-group-item">Ajout d'Acteur</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route('movies.creer')}}" class="list-group-item">Formulaire ajout films</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route('actors.creer')}}" class="list-group-item">Formulaire ajout acteurs</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route('directors.creer')}}" class="list-group-item">Formulaire ajout réalisateurs</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route('categories.creer')}}" class="list-group-item">Formulaire ajout catégories</a></li>
            <li class="list-group-item list-group-item-success"><a href="{{route ('movies.voir') }}" class="list-group-item">Ajout de réalisateurs</a></li>
              <li role="separator" class="divider"></li>
            <li class="list-group-item list-group-item-warning"><a href="#" class="list-group-item"><i class="glyphicon glyphicon-zoom-in"></i> recherche avancée</a></li>
            <li class="list-group-item list-group-item-warning"><a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i> Se connecter</a></li>
          </ul>
        </div>
      </div>
    </div>
  @endsection
