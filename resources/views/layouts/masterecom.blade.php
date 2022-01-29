<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

	<meta name="title" content="Camionetasshop" >
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

	<!-- Meta Description -->
	<meta name="description" content="Camionetas y autos de alta gama en Argentina. Camionetas shop es la página web más segura en el país para comprar una camioneta. Verificación técnico mecánica aprobados. Envío gratis. Atención 24/7">


	<meta name="keywords" content="camionetas usadas, camionetas ford, camionetas chevrolet, camionetas toyota, camionetas usadas en neuquen, campers para camionetas, autos y camionetas mercado libre, camionetas usadas en corrientes, camionetas usadas en buenos aires, camionetas usadas en venta, camionetas nissan, camionetas 4x4 usadas, autos y camionetas mercado libre, rosario garage camionetas" >
	<meta name="sitedomain" content="www.camionetasshop.com" >
	<meta name="organization" content="Camionetas Shop" >
	<meta name="designer" content="InteligenT" >
	<meta name="robots" content="index.follow" >
	<meta name="revisit-after" content="1days" >
	<meta name="googlebot" content="index.follow" >
	<meta name="author" content="Inteligent" >

	<meta name="google-site-verification" content="rVtTpjCFmSR8_QcPXRySq3a_73f4OWaM4HW2inK1MDg" />

	<!-- CSS STYLE-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/xzoom.css')}}" media="all" />

	<link type="text/css" rel="stylesheet" media="all" href="{{asset('fancybox/source/jquery.fancybox.css')}}" />
	<link type="text/css" rel="stylesheet" media="all" href="{{asset('magnific-popup/css/magnific-popup.css')}}" />


	
	<meta property="og:image" content="{{ asset('img/logo-1.jpg') }}">
	<meta property="og:title" content="Camionetasshop" />
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Camionetasshop</title>
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

