<!DOCTYPE HTML>
<!--
 Theory by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Vídeo aulas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/changes.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo">Theory</a>
            <nav id="nav">
                <a href="/listaCadeiras">Cadeiras</a>
                <a href="">Logout</a>
            </nav>
           <!-- <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a> -->
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="background-color-grey">
        <div class="inner">
            <div class="flex">
                <div class="copyright">
                    &copy; Grupo 4
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>

</html>
