@extends ('layouts.app')

@section('content')
  <div class="col-md-6 container" >
    @include('inc.messages')
<form action="/registr/submit" method="post">
  @csrf
  <div class="form-group row">
    <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="form-group row">
    <label for="surname">Surname:</label>
      <input type="text" name="surname" class="form-control" id="surname">
  </div>
    <div class="form-group row">
      <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="form-group row">
      <label for="password">Password:</label>
        <input type="password" name="password"class="form-control" id="password">
    </div>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">Sign up </button>
    </div>
</form>
</div>

@endsection
