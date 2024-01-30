@extends('master')

@section('title', 'Companies')

@section('content')
  @if($_SESSION['profesor'])
    <a href="{{$router->generate('company_create')}}" class="btn btn-success">New Company</a>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Mode</th>
        <th scope="col">Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($companies as $company)
      <tr>
        <th scope="row">{{ $company->id }}</th>
        <td>
          <a href="{{ $company->url }}" target="_blank">{{ $company->name }}</a>
        </td>
        <td>{{ $company->mode }}</td>
        <td>{{ $company->description }}</td>
        <td>
          <a href="{{$router->generate('company_delete', ['id' => $company->id])}}" class="btn btn-danger">Delete</a>
          <a href="{{$router->generate('company_edit', ['id' => $company->id])}}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection