@extends('landing.layout.base')


@section('content')

<div id="header-container">
	

<!-- Background Slides -->
<div id="featured-slider-outside">
<div id="featured-slider-container">
<div id="featured-slider-subcontainer">

		<div id="featured-page-title"> 
			<img src="{{ asset('images/sample-images/page-title12.jpg') }}" alt="background image" />
		</div><!-- close #featured -->
		
</div><!-- close #featured-slider-subcontainer -->
</div><!-- close #featured-slider-container -->
</div><!-- close #featured-slider-outside -->
	<script type="text/javascript">
	     $(window).load(function() {
	         $('#featured-page-title').orbit({
			     animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
			     animationSpeed: 1200,                // how fast animtions are
			     timer: true, 			 // true or false to have the timer
			     advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
			     pauseOnHover: false, 		 // if you hover pauses the slider
			     startClockOnMouseOut: false, 	 // if clock should start on MouseOut
			     startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
			     directionalNav: false, 		 // manual advancing directional navs
			     captions: false, 			 // do you want captions?
			     captionAnimation: 'fade', 		 // fade, slideOpen, none
			     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
			     bullets: false,			 // true or false to activate the bullet navigation
			     bulletThumbs: false,		 // thumbnails for the bullets
			     bulletThumbLocation: '',		 // location from this file where thumbs will be
			     afterSlideChange: function(){} 	 // empty function 
			});
	     });
	</script>
<!-- End Background Slides -->


	<div id="page-title"><h2>Implementación de Sistemas de Gestión</h2></div>
	
</div><!-- close #header-container -->

<div id="main-container-bg">
<div id="main-container">
	
	
	<div class="bread-crumbs">Ud. esta en: <a href="index.html">Servicios</a> &rsaquo; Sistemas</div>
	
		<div id="portfolio">
		
		<p>Asesoría en la implementación de Sistemas de Gestión, de acuerdo a los requerimientos específicos de cada organización, y 
		bajo los lineamientos de las normas Internacionales y nacionales.</p>
		
		<div class="container">
			
			<h3>Servicios</h3>
			<ul class="checkmark">
				<li>ISO 9001 Sistema de Gestión de la Calidad</li>
				<li>ISO 45001 Sistema de Gestión de Seguridad y Salud Ocupacional.</li>
				<li>ISO 14001 Sistema de Gestión Ambiental.</li>
				<li>Ley Nº 29783 Ley de Seguridad y Salud en el Trabajo.</li>
				<li>Herramientas de mejora continúa.</li>
				
			</ul>
			
		</div>
		<img src="{{ asset('images/servicios.png') }}" class="transparent" />
		<div class="divider"></div>
		
		


		
		
	
	</div><!-- close #portfolio -->
	
	



	
<div id="main-container-base"></div><!-- close #main-container-base -->	
</div><!-- close #main-container -->
</div><!-- close #main-container-bg -->

@stop