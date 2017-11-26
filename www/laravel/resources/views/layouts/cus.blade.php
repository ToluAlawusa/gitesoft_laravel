<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="{{ URL::to('src/css/cus_styles.css') }}">
    <link href="{{ URL::to('src/css/bootstrap.css') }}" rel="stylesheet">
    <title>@yield('pagetitle')</title>
</head>
<body id="home">
  <!-- DO NOT TAMPER WITH CLASS NAMES! -->
  <!-- top bar starts here -->
    @include('includes.custopnav')
  <!-- main content starts here -->
  <div class="main">
    @yield('content')
  </div>
  <!-- footer starts here-->
  <div class="footer">
    <p class="copyright">&copy; copyright 2016</p>
  </div>
</body>
</html>