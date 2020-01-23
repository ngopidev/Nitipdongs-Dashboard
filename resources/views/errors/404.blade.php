<!DOCTYPE html>
<html>
<head>
	@include("layouts.part.asset")
</head>
<body class="sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse">
  <div class="wrapper">
    @include('layouts.part.header')
    @include('layouts.part.sidebar')
    <div class="content-wrapper" style="align-items: center;justify-content: center;display: flex;">
    	<p>
    		404 | Page Not Found
    	</p>
    </div>
    @include('layouts.part.footer')
  </div>
</body>
	@include("layouts.part.script")
</html>