<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->

	<!-- CSS STYLE-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/xzoom.css')}}" media="all" />

	<link type="text/css" rel="stylesheet" media="all" href="{{asset('fancybox/source/jquery.fancybox.css')}}" />
  <link type="text/css" rel="stylesheet" media="all" href="{{asset('magnific-popup/css/magnific-popup.css')}}" />

	

	<meta property="og:image" content="{{ asset('img/logo-1.jpg') }}">
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Camionetas shop</title>
	@include('parts.style')

</head>

<body>


	@include('parts.header2')



	@yield('contenido')


	@include('parts.footer')

	@include('parts.scripts')


</body>

</html>


<script type="text/javascript" src="{{asset('/js/xzoom.js')}}"></script>
<script type="text/javascript" src="{{asset('fancybox/source/jquery.fancybox.js')}}"></script>
<script type="text/javascript" src="{{asset('magnific-popup/js/magnific-popup.js')}}"></script>
