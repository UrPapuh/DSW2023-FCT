@extends('master')

@section('content')
  <form method="post" 
  @if(isset($company))
    action="{{$router->generate('company_update', ['id' => $company->id])}}"
  @else
    action="{{$router->generate('company_post')}}"
  @endif
  >
    <!-- name -->
    <div class="mb-3">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputName" name="inputName"
      @if(isset($company))
        value="{{$company->name}}"
      @endif
      >
    </div>
    <!-- url -->
    <div class="mb-3">
      <label for="inputURL" class="form-label">URL</label>
      <input type="text" class="form-control" id="inputURL" name="inputURL"
      @if(isset($company))
        value="{{$company->url}}"
      @endif
      >
    </div>
    <!-- mode -->
    <div class="mb-3">
      <label for="inputMode" class="form-label">Mode</label>
      <select name="inputMode" id="inputMode" required>
        <option value="online">Online</option>
        <option value="presencial">Presencial</option>
        <option value="semipresencial">Semipresencial</option>
      </select>
    </div>
    <!-- description -->
    <div class="mb-3">
      <label for="inputDescription" class="form-label">Description</label>
      <input type="text" class="form-control" id="inputDescription" name="inputDescription"
      @if(isset($company))
        value="{{$company->description}}"
      @endif
      >
    </div>
    </div>
    <button type="submit" class="btn btn-primary" id="buttonCreate" name="buttonCreate">Save</button>
  </form>
@endsection