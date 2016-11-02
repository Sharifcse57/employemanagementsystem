<!DOCTYPE html>
<html>
<head>
    <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/css/flat-admin.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="/css/theme/blue-sky.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/blue.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/red.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/yellow.css">


</head>

<body>
<div class="app app-default">
    @yield('sidebar')

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">

        </div>
    </script>
    <div class="app-container">
     @yield('navbar')
    @yield('content')

        @yield('footer')
    </div>

</div>

    <script type="text/javascript" src="/js/vendor.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>

</body>
</html>