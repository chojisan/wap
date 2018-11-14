<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
        <link rel="icon" href="../../../../favicon.ico">

        <title>@get('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('bootstrap/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/signin.css') }}" rel="stylesheet">

        @styles()

    </head>

    <body>

        <!-- @partial('header') -->

        @content()

        <!-- @partial('footer') -->

        @scripts()
    </body>
</html>