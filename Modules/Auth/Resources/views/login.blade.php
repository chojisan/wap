@extends('layouts.bootstrap')

@section('content')
@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{ $message }}</strong>
	</div>
@endif

@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
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
<form class="form-signin" method="POST" action="{{ url('/auth/login') }}">
  {{ csrf_field()}}
  <img class="mb-4" src="{{ asset('bootstrap/assets/brand/bootstrap-solid.svg') }}" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="email" class="sr-only">Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
           <input type="checkbox" name="remember_me"> Remember me
         </label>
         </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2018. Takada Industries, Inc.</p>
</form>
@stop