<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name', 'NitipDong Dashboard') }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('lte/dist/css/custom.css')}}">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">