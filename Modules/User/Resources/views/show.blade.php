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
                                <h4>User Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Users</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Accounts List</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">User Profile</a>
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
                                <h5>Basic Form Inputs</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
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
                            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@stop