
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
<form class="form-signin" method="POST" action="{{ url('/auth/forgot-password') }}">
  {{ csrf_field()}}
  <p> Forgot password</p>
  <label for="email" class="sr-only">Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2018. Takada Industries, Inc.</p>
</form>