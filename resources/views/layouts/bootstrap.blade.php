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
        <link href="{{ asset('assets/vendor/bootstrap/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/vendor/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/vendor/feather/css/feather.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
        <!--<link href="{{ asset('assets/css/signin.css') }}" rel="stylesheet">-->
        
        
    </head>

    <body>
        @include('partials.top-navbar')

        <div class="main-container">
            <div class="main-wrapper">
                @include('partials.sidebar')
                <div class="main-content">
                    @yield('content')
                    <!--
                    <main role="main" class="main-body col-md-9 col-lg-10 px-4">
                        
                    </main>
                    -->
                </div>
                
            </div>
        </div>

        <script src="{{ asset('assets/vendor/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/switchery/js/switchery.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>


    </body>
</html>