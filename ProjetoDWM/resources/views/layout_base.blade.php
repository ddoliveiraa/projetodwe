<!DOCTYPE HTML>
<!--
 Theory by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Theory by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo">Theory</a>
            <nav id="nav">
                <a href="index.html">Página principal</a>
                <a href="generic.html">Generic</a>
                <a href="elements.html">Elements</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="inner">
            <div class="flex">
                <div class="copyright">
                    &copy; Grupo 4
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</html>
