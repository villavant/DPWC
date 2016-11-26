<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
	<title>IGP Consulting | Ingenieria, Gesstion y Procesos</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:regular,bold' rel='stylesheet' type='text/css' />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script><!-- Various Custom JavaScript including Lightbox Settings --> 
	<script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script><!-- Lightbox JavaScript --> 
	<script type="text/javascript" src="{{ asset('js/jquery.orbit-1.2.3.min.js') }}"></script><!-- Powers Simple slider and Page Title Background -->
	<script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script><!-- Drop-Down Menu JavaScript --> 
	<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script><!-- Contact Form JavaScript --> 
	
	
	<!-- Color Picker Styles and JavaScript -->
	<link rel="stylesheet" media="screen" type="text/css" href="{{ asset('css/colorpicker.css') }}" />
	<script type="text/javascript" src="{{ asset('js/colorpicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/eye.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/layout.js?ver=1.0.2') }}"></script>
	
	
	<!-- Simple slider IE Styles --> 
	<!--[if IE]>
	     <style type="text/css">
	         .timer { display: none !important; }
	         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
	    </style>
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

@include('landing.layout.navigation')

@yield('content')

@include('landing.layout.footer')

</body>
</html>