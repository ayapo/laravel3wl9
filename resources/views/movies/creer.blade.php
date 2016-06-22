@extends('layout')

@section('content')
  <h3>Liste des films</h3>
  @endsection

  @section('arianne')
    @parent
    <li><a href="{{route('categories.creer') }}">Créer</a></li>
  @endsection

  <table class="table">
    <tbody>
    @foreach($categories as $key => $categorie)
      <tr>
        <td><a href="#">{{$categorie->id}}</a></td>
        <td><img class="col-md-4 img-responsive img-thumbnail" src="{{$categorie->image}}" /></td>
        <td><h4><a>{{$categorie->title}}</a></h4></td>
        <td style="word-break: break-all"><p><i>{{strip_tags($categorie->description)}}</i></td>
        <td>
          <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search">Voir</span></a>
          <a href="#" class="btn btn-xs btn-warning"><span class="fa fa-edit">Editer</span></a>
          <a href="#" class="btn btn-xs btn-danger"><span class="fa fa-close">Supprimer</span></a>
        <td>


      </tr>
    @endforeach
    </tbody
  </table>
