<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">FCT Premium</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{$router->generate('home')}}">Inicio</a>
            </li>
            @if(isset($_SESSION['name']))
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{$router->generate('company_list')}}">Empresas</a>
              </li>
              @if($_SESSION['profesor'])
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{$router->generate('choice_list')}}">Elección de los Alumnos</a>
                </li>
              @endif
            @endif
          </ul>
          @if (isset($_SESSION['name']))
          <form class="d-flex" method="POST" action="#">
            <input class="form-control me-2" type="search" placeholder="Descripción" aria-label="Search" name="description">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
            <span class="mx-2">Hola, {{$_SESSION['name']}}</span>
            <a href="{{$router->generate('logout')}}" class="btn btn-warning mx-2">Logout</a>
          @else
            <a href="{{$router->generate('login')}}" class="btn btn-primary mx-2">Login</a>            
          @endif
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>@yield('title')</h1>
        </div>
      </div>  
      <div class="row">
        @section('content')                       
        @show
      </div>
    </div>

 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>