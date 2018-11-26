@extends('layouts.bootstrap')

@section('content')
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card auth-login">
                    <div class="card-header text-center">
                        <img class="mb-4" src="{{ asset('assets/images/takada.png') }}" alt="" height="72">
                        <h2 class="font-weight-normal">Forgot Password</h2>
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
                            <form method="POST" action="{{ url('/auth/forgot-password') }}">
                                {{ csrf_field()}}
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
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