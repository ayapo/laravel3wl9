@extends('layout')

@section('content')
<h1> <small>Liste des categories</small></h1>



<table class="table table-responsive table-bordered table-striped">
  <thead>
    <tr>
      <th>titre</th>
      <th>description</th>
      <th>Genre</th>

    </tr>
  </thead>

  <tbody>
  @foreach($categories as $key => $categorie)
    <tr>
      <td><a href="#">{{$categorie->title}}</a></td>
      <td><h4><a>{{$categorie->description}}</a></h4></td>
      <td><h4><a>{{$categorie->slug}}</a></h4></td>


    </tr>
  @endforeach
</tbody>
</table>
  @endsection


@section('arianne')
@parent
  <li><a href="{{route('categories.index')}}">Liste des categories</a></li>
@endsection
