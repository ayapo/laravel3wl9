@extends('layout')

@section('content')
  <h3>Liste des films</h3>
  @endsection

  @section('arianne')
    @parent
    <li><a href="{{route('movies.creer') }}">Créer</a></li>
  @endsection
