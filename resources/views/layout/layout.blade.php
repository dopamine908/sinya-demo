<!doctype html>
<html lang="en">
@include('layout.head')
<body>
@yield('banner')
<div class="container">
    @yield('search-tag')
    @yield('search-condition-show')
    @yield('product-show')
</div>
</body>
@include('main.script')
</html>
