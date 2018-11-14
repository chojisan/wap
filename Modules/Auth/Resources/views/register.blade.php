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
      <form method="POST" action="register">
        {{ csrf_field()}}
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="input" class="form-control" id="username" name="username" placeholder="Enter Username" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-10">
            <input type="input" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
          <div class="col-sm-10">
            <input type="input" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-10">
            <input type="input" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email Address</label>
          <div class="col-sm-10">
            <input type="emal" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

      </form>
    </div>
  </div>
</div>
@stop