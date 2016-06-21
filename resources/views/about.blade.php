
@extends('layout')

@section('metadesc') @parent- about-us @endsection
@section('titrePage') @parent - A propos @endsection

@section('content')
  <h3>A propos de l'Application backoffices </h3>
  <h1 class="page-title">Bienvenue dans le monde d'Ayapo about-us</h1>
  @endsection
  @section('arianne')
    <li><a href="{{route('about')}}">A propos</a></li>
  @endsection
