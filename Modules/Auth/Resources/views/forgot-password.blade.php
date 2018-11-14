@extends('layouts.bootstrap')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
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
			<form method="POST" action="{{ url('/auth/forgot-password') }}">
				{{ csrf_field()}}
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email address</label>
					<div class="col-sm-10">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
					</div>
				</div>

				<button class="btn btn-primary" type="submit">Reset</button>
				<p class="mt-5 mb-3 text-muted">&copy; 2018. Takada Industries, Inc.</p>
			</form>
		</div>
  </div>
</div>
@stop