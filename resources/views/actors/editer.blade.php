@extends('layout')

@section('content')
<li>Liste de mes films éditer</li>
@endsection

@section('arianne')
  <li><a href="{{route('movies.editer')}}">Editer</a></li>
@endsection
