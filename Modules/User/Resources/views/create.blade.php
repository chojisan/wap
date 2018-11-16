@extends('layouts.bootstrap')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pull-left">
          <h2>Add New User</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        @if ($errors->any())
          <div class="alert aler-danger">
            <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('user.store') }}">
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
            <label for="extension" class="col-sm-2 col-form-label">Name Extension</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" id="extension" name="extension" placeholder="Enter Name Extension (e.g. JR, SR, I, II, III)" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
              <input type="emal" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
            <div class="col-sm-10">
              <input type="emal" class="form-control" id="birthdate" name="birthdate" placeholder="Enter Birthdate" required>
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
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
@stop