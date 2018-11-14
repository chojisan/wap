@extends('layouts.bootstrap')

@section('content')
@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{ $message }}</strong>
	</div>
@endif

@if (count($errors) > 0)
  <div class="alert aler-danger">
    <ul>
    	@foreach($errors->all() as $error)
        	<li>{{ $error }}</li>
      	@endforeach
    </ul>
  </div>
@endif
<form class="form-signin" method="POST" action="">
  {{ csrf_field()}}
  <div class="form-group">
    <label for="password">New Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" required>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2018. Takada Industries, Inc.</p>
</form>
@stop