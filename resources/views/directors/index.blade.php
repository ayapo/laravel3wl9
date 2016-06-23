@extends('layout')

@section('content')
<h1> <small>Liste de mes réalisateurs</small></h1>



<table class="table table-responsive table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>DOB</th>
      <th>biography</th>
      <th>Note presse</th>
      <th>Portrait</th>
    </tr>
  </thead>

  <tbody>
  @foreach($directors as $key => $director)
    <tr>
      <td><a href="#">{{$director->id}}</a></td>
      <td><h4><a>{{$director->lastname}}</a></h4></td>
      <td><h4><a>{{$director->firstname}}</a></h4></td>
      <td><h4><a>{{$director->dob}}</a></h4></td>
      <td style="word-break: break-all"><p><i>{{strip_tags($director->biography)}}</i></td>
      <td><a href="#">{{$director->note}}</a></td>
      <td><img class="col-md-4 img-responsive img-thumbnail" src="{{$director->image}}" /></td>

    </tr>
  @endforeach
</tbody>
</table>
@endsection
@section('arianne')
@parent
  <li><a href="{{route('directors.index')}}">Liste de mes actors</a></li>
@endsection
