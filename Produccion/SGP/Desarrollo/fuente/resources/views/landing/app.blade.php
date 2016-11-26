@extends('landing.layout.base')

@section('content')

<div id="header-container">
	

<!-- Background Slides -->
<div id="featured-slider-outside">
<div id="featured-slider-container">
<div id="featured-slider-subcontainer">

		<div id="featured-page-title"> 
			<img src="{{ asset('images/sample-images/page-title5.jpg') }}" alt="background image" />
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


	<div id="page-title"><h2>Aplicaciones</h2></div>
	
</div><!-- close #header-container -->

<div id="main-container-bg">
<div id="main-container">
	
	<div class="sidebar">
		<h4>Ingreso al Sistema </h4><img src="{{ asset('images/login.png') }}">
			<form method="post" action="checklogin.php" id="contactform" />
				<div>
					<label>Usuario:<span class="required">*</span></label>
					<input type="text" size="45" name="usuario" id="usuario" value="" class="required" />
				</div>

				<div>
					<label>Password:<span class="required">*</span></label>
					<input type="password" size="45" name="password" id="password" value="" class="required" />
				</div>
				<br>
				<input type="submit" class="submit-form" value="Ingresar" name="submit" />
				

			</form>
		
	</div><!-- close .sidebar -->

	<div id="main-content-sidebar">
	
		<div class="bread-crumbs">Ud. esta en: <a href="index.html">Aplicaciones</a> &rsaquo; Ingreso</div>
	
		
		<h3>En IGP Consulting...</h3>
		<p>Prevención es el concepto que mejor define la filosofía y los valores de nuestra entidad, capaz de diseñar las soluciones más vanguardistas y eficaces para nuestros clientes, prestando siempre el servicio más completo, eficiente y competitivo del mercadocon el objetivo de obtener los mayores niveles de rendimiento y eficacia a favor de nuestros clientes.</p>
		<div class="regular-slider"> 
			<img src="{{ asset('images/sample-images/slider1.jpg') }}" alt="Slider" />
		</div><!-- close #featured -->
		<br>
		<p>IGP Consulting es una compañía de ámbito nacional, formada por un equipo multidisciplinar de expertos en consultoría, formación y gestión empresarial especializada en Prevención de Riesgos Laborales y en Seguridad y Salud Laboral.</p>
		
	
	
	</div><!-- close #main-content-sidebar -->
	
	
<div id="main-container-base"></div><!-- close #main-container-base -->	
</div><!-- close #main-container -->
</div><!-- close #main-container-bg -->

@stop