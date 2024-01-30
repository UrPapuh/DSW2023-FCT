@extends('master')

@section('title', 'Choices')

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">user_id</th>
        <th scope="col">company_id</th>
      </tr>
    </thead>
    <tbody>
      @foreach($choices as $choice)
      <tr>
        <th scope="row">{{ $choice->id }}</th>
        <td>{{ $choice->user_id }}</td>
        <td>{{ $choice->company_id }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection