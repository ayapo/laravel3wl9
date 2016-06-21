

@extends('layout')

@section('metadesc') @parent-  ils parlent de nous @endsection
@section('titrePage') @parent - Ils parlent de nous @endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{asset('css/concept.css')}}" media="all" title="no title" charset="utf-8">
@endsection

          @section('content')
          @show


          @section('arianne')
            <li><a href="{{url('ilsparlentdenous')}}">Nous</a></li>
          @endsection
