@extends ('layouts.app')

@section('content')
  <div class="col-md-6 container" >
    @include('inc.messages')
<form action="/login/submit" method="post">
  @csrf
    <div class="form-group row">
      <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="form-group row">
      <label for="password">Password:</label>
        <input type="password" name="password"class="form-control" id="password">
    </div>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">Sign in </button>
    <a class="nav-link" href="/registr">i don't have account!</a>
    </div>

</form>
</div>

@endsection
