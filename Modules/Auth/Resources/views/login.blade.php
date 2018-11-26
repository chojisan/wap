@extends('layouts.bootstrap')

@section('content')
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card auth-login">
                    <div class="card-header text-center">
                        <img class="mb-4" src="{{ asset('assets/images/takada.png') }}" alt="" height="72">
                        <h2 class="font-weight-normal">Sign in</h2>
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
                    </div>
                    <div class="card-block">
                        <div class="form-wrapper ">
                            <form class="form-signin" method="POST" action="{{ url('/auth/login') }}">
                                {{ csrf_field()}}
                                
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox mb-3">
                                            <label>
                                                <input type="checkbox" name="remember_me"> Remember me
                                            </label>
                                        </div>
                                        <div class="forgot-password text-right float-right">
                                            <a href="forgot-password" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                    <p class="mt-3 mb-3 text-muted">&copy; 2018. Takada Industries, Inc.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop