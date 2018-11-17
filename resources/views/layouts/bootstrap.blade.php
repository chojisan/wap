<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Web Application Portal</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        
        <link href="{{ asset('bootstrap/dashboard.css') }}" rel="stylesheet">
        <!--<link href="{{ asset('bootstrap/signin.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
    </head>

    <body>
        @include('partials.top-navbar')

        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('content')
                </main>
            </div>
        </div>

        <script src="{{ asset('jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('switchery/js/switchery.min.js') }}"></script>
    </body>
</html>