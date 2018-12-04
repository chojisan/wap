@extends('layouts.bootstrap')

@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="page page-default">
        <div class="page-heading">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Edit User Account</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Users</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Accounts List</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Edit User Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- /.panel-heading -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Account</h5>
                                @if ($errors->any())
                                <div class="alert aler-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        <div class="card-block">
                            <div class="form-wrapper ">
                                <form method="POST" action="{{ route('user.update', $user->id) }}">
                                    <div class="form-content">
                                        {{ csrf_field()}}
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                            <input type="input" class="form-control" name="username" value="{{ $user->username }}" placeholder="Enter Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                                            <div class="col-sm-10">
                                            <input type="input" class="form-control" name="first_name" value="{{ $user->first_name }}" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
                                            <div class="col-sm-10">
                                            <input type="input" class="form-control" name="middle_name" value="{{ $user->middle_name }}" placeholder="Enter Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                            <input type="input" class="form-control" name="last_name" value="{{ $user->last_name }}" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="extension" class="col-sm-2 col-form-label">Name Extension</label>
                                            <div class="col-sm-10">
                                            <input type="input" class="form-control" name="extension" value="{{ $user->extension }}" placeholder="Enter Name Extension (e.g. JR, SR, I, II, III)" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                            <div class="col-sm-10">
                                            <input type="emal" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter Email Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
                                            <div class="col-sm-10">
                                            <input type="emal" class="form-control" name="birthdate" value="{{ $user->birthdate }}" placeholder="Enter Birthdate" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" value="{{ $user->password }}" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password }}" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <a class="btn btn-primary" href="{{ route('user.index') }}">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop