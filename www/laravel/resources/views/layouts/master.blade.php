<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css"  href="{{ URL::to('src/css/ad_styles.css') }} ">
        <title>@yield('title')</title>
    </head>
    <body style="height: 100%;">
        <!-- top bar starts here -->
            @include('includes.adminheader')
        <!-- main content starts here -->
        <div class="main">
            @yield('content')
        </div>

        <section class="foot" style="position: fixed; bottom: 0; left: 0; width: 100%; height: 6%; color: white;">
            <!-- footer starts here-->
            <div>
                <p>&copy; 2016</p>
            </div>
        </section>
    </body>
</html>


