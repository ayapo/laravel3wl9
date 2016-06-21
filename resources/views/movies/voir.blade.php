@extends('layout')

@section('content')
<li>Liste de mes films vu</li>
@endsection

@section('arianne')
  <li><a href="{{route('movies.voir')}}">Voir</a></li>
@endsection
