

@extends('layout')

@section('metadesc') @parent-  descritpion de la page concept @endsection
@section('titrePage') @parent - A propos @endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{asset('css/concept.css')}}" media="all" title="no title" charset="utf-8">
@endsection

@section('content')
<h1 class="page-title">Bienvenue dans le monde d'Ayapo concept</h1>
@endsection


@section('js')
  @parent
  <script type="text/javascript" src={{ 'asset(js/concept.js)' }}>

  </script>
@endsection
