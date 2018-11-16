@extends('layouts.bootstrap')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pull-left">
          <h2>User Profile</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form method="POST" action="{{ route('user.update', $user->id) }}">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              {{ $user->username }}
            </div>
          </div>
          <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
              {{ $user->first_name }}
            </div>
          </div>
          <div class="form-group row">
            <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
            <div class="col-sm-10">
              {{ $user->middle_name }}
            </div>
          </div>
          <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
              {{ $user->last_name }}
            </div>
          </div>
          <div class="form-group row">
            <label for="extension" class="col-sm-2 col-form-label">Name Extension</label>
            <div class="col-sm-10">
              {{ $user->extension }}
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
              <{{ $user->email }}
            </div>
          </div>
          <div class="form-group row">
            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
            <div class="col-sm-10">
              {{ $user->birthdate }}
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop