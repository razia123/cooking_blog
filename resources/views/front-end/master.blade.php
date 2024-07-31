<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset("front-end/img/core-img/favicon.ico") }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset("front-end/style.css") }}">

</head>

<body>
    <x-preloader />

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        @include('front-end.layout.top_header')

        <!-- Logo Area -->
        <div class="logo-area">
            <a href="index.html"><img src="{{ asset("front-end/img/core-img/logo.png") }}" alt=""></a>
        </div>

        @include('front-end.layout.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')


    @include('front-end.layout.footer')

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset("front-end/js/jquery/jquery-2.2.4.min.js") }}"></script>
    <!-- Popper js -->
    <script src="{{ asset("front-end/js/bootstrap/popper.min.js") }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset("front-end/js/bootstrap/bootstrap.min.js") }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset("front-end/js/plugins/plugins.js") }}"></script>
    <!-- Active js -->
    <script src="{{ asset("front-end/js/active.js") }}"></script>
</body>

</html>
