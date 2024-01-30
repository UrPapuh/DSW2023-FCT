@extends('master')

@section('title', 'Login')

@section('content')
<h2>Datos de validación</h2>
<form method="POST" action="{{$router->generate('validate')}}">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
    <div id="nameHelp" class="form-text">Introduce un nombre para el usuario</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Validar</button>
</form>
@endsection