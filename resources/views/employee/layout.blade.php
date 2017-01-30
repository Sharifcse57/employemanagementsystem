
@yield('header')
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

   
   


</body>
</html>