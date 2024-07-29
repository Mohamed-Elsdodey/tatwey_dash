<!DOCTYPE html>
<html>



<body>
@include('Web.layouts.assets.css')
@yield('css')
@include('Web.layouts.inc.header')
@yield('content')
@include('Web.layouts.inc.footer')

@include('Web.layouts.assets.js')
@yield('js')

</body>

</html>
