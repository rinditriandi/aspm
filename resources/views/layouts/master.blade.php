<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.includes.head')
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>
        @include('layouts.includes.sidebar')
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
           @include('layouts.includes.navbar')
        </nav>
        <!-- /.Navbar -->

        @yield('button')

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        
            @yield('content')
            
        
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only pt-0 mt-5 rgba-stylish-light">
        @include('layouts.includes.footer')
    </footer>
    <!--/.Footer-->


    @include('layouts.includes.script')

    @yield('script')

</body>

</html>