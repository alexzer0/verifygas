<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
    <link href="{{ asset('css/site.min.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ asset('css/contacts.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/web-icons/web-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">


</head>
<body class="animsition site-navbar-small">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse navbar-inverse" role="navigation">
        @include('partials.navbar') 
    </nav>
    <div class="site-menubar site-menubar-light site-menubar-light">
        <div class="site-menubar-body">
        <div><div>
            @include('partials.menubar')
        </div></div>
        </div>
    </div>
    <div class="page">
      <div class="page-content">
       @yield('content')
      </div>
    </div>
    <footer class="site-footer"> 
        @include('partials.footer')
    <footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
