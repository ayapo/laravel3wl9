@extends('layout')

@section('content')
<h1> <small>Liste de mes films</small></h1>
@if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
@endif


<table class="table table-responsive table-bordered table-striped">
  <tbody>
  @foreach($movies as $key => $movie)
    <tr>
      <td><a href="#">{{$movie->id}}</a></td>
      <td><img class="col-md-4 img-responsive img-thumbnail" src="{{$movie->image}}" /></td>
      <td><h4><a>{{$movie->title}}</a></h4></td>
      <td style="word-break: break-all"><p><i>{{strip_tags($movie->synopsis)}}</i></td>
      <td>
        <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search">Voir</span></a>
        <a href="#" class="btn btn-xs btn-warning"><span class="fa fa-edit">Editer</span></a>
        <a href="#" class="btn btn-xs btn-danger"><span class="fa fa-close">Supprimer</span></a>
      <td>


    </tr>
  @endforeach
  </tbody>
</table>

@endsection

@section('arianne')
@parent
  <li><a href="{{route('movies.index')}}">Liste des films</a></li>
@endsection
