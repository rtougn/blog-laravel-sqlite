@extends ('layouts.master')
@section ('head.title')
Login
@stop
@section ('body.content')
@if(Session::has('login') && Session::get('login') == true)
<p class="text-center">Logged</p>
@else
<div class="col-sm-6 offset-sm-3">
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong>Some problems<br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if(isset($fail))
  <div class="alert alert-danger">{{ $fail }}</div>
  @endif
  <h3 class="text-center">Login</h3>
  <form action="{{ route('login.login') }}" method="POST" class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
      <label for="name" class="control-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" required="required" />
    </div>
    <div class="form-group">
      <label for="password" class="control-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" required="required" />
    </div>
    <div class="form-group">
      <button class="btn btn-success">Login</button>
    </div>
  </form>
</div>
@endif
@stop