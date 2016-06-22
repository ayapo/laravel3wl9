<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@section('metadesc') page de garde @show">
    <title>@section('titrePage') backoffice @show</title>

    <!-- Bootstrap -->
    @section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    @show
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <body>
        <header>



            <h1 class="page-title">Bienvenue dans le monde d'Ayapo</h1>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <nav class="navbar navbar-default">
                 <div class="container-fluid">
                   <ul class="nav navbar-nav">
                      <li ><a href="{{url('/')}}"><span id="projet"> Projet L9<i class=""></i></span></a></li>
                      <li><a href="{{url('/')}}"><span> Home <i class="glyphicon glyphicon-home"></i></span></a></li>
                      <li><a href="{{url('faq')}}"><span> faq <i class="glyphicon glyphicon-question-sign"></i></span></a></li>
                      <li><a href="{{route('about')}}"><span> A propos <i class="glyphicon glyphicon-info-sign"></i></span></a></li>
                      <li><a href="{{url('contact')}}"><span> contact <i class="glyphicon glyphicon-home"></i></span></a></li>
                      <li><a href="{{url('ilsparlentdenous')}}"><span> Nous <i class="glyphicon glyphicon-eye-open"></i></span></a></li>
                      <li role="separator" class="divider"></li>
                   </ul>
                   <form class="navbar-form navbar-right" role="search">
                   <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search">
                   </div>
                   <button type="Mon compte" class="btn btn-default">Mon compte</button>
                 </form>
                </div>
              </nav>
            </div>

            <ol class="breadcrumb">
              <li><a href="{{route('welcome')}}">Home</a></li>
              @section('arianne') @show
            </ol>

            @section('content')
            @show




        <hr />
        <footer>
        <h3 class=text-center>copyright 3WL9</h3>
        </footer>

      </header>
      @section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @show
  </body>
</html>
