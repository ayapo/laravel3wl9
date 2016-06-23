@extends('layout')

@section('content')
<h1> <small>Liste de mes actors</small></h1>



<table class="table table-bordered table-striped table-condensed" width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>DOB</th>
      <th>biography</th>
      <th>Oscar</th>
      <th>Portrait</th>
    </tr>
  </thead>

  <tbody>
  @foreach($actors as $key => $actor)
    <tr>
      <td><a href="#">{{$actor->id}}</a></td>
      <td><h4>{{$actor->lastname}}</h4></td>
      <td><h4>{{$actor->firstname}}</h4></td>
      <td>{{$actor->dob}}</h4></td>
      <td> {{ $actor->biography }}</td>
      <td>{{$actor->recompenses}}</td>
      <td><img class="col-md-4 img-responsive img-thumbnail" src="{{$actor->image}}" /></td>

    </tr>
  @endforeach
</tbody>
</table>

@endsection


@section('arianne')
@parent
  <li><a href="{{route('actors.index')}}">Liste de mes actors</a></li>
@endsection
