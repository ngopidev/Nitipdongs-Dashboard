<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.part.asset')
</head>
<body class="sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse">
  <div class="wrapper">
    @include('layouts.part.header')
    @include('layouts.part.sidebar')
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('layouts.part.footer')
  </div>
</body>
  @include('layouts.part.script')
</html>
