@extends('layout')

@section('content')
<h1> <small>Liste de mes actors</small></h1>



<table class="table">
  <tbody>
  @foreach($actors as $key => $actor)
    <tr>
      <td><a href="#">{{$actor->id}}</a></td>
      <td><img class="col-md-4 img-responsive img-thumbnail" src="{{$actor->image}}" /></td>
      <td><h4><a>{{$actor->lastname}}</a></h4></td>
      <td style="word-break: break-all"><p><i>{{strip_tags($actor->nationality)}}</i></td>
      <td>
        <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search">Voir</span></a>
        <a href="#" class="btn btn-xs btn-warning"><span class="fa fa-edit">Editer</span></a>
        <a href="#" class="btn btn-xs btn-danger"><span class="fa fa-close">Supprimer</span></a>
      <td>


    </tr>
  @endforeach
  </tbody
</table>

@section('arianne')
@parent
  <li><a href="{{route('actors.index')}}">Liste de mes actors</a></li>
@endsection
