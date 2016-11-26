@extends('landing.layout.base')


@section('content')
<div id="header-container">
	

<!-- Background Slides -->
<div id="featured-slider-outside">
<div id="featured-slider-container">
<div id="featured-slider-subcontainer">

		<div id="featured-page-title"> 
			<img src="{{ asset('images/sample-images/page-title6.jpg') }}" alt="background image" />
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


	<div id="page-title"><h2>Nosotros</h2></div>
	
</div><!-- close #header-container -->

<div id="main-container-bg">
<div id="main-container">
	
	<div class="sidebar">
		<h4>Nuestros Valores</h4>
		<ul class="submenu">
			<li><a href="#">PASION</a></li>
			<li><a href="#">EQUIPO</a></li>
			<li><a href="#">CALIDAD</a></li>
			<li><a href="#">EFECTIVIDAD</a></li>
			<li><a href="#">PERSONA</a></li>
			<li><a href="#">ETICA</a></li>
		</ul>
		
		<div id="sidebar-base"></div>
	</div><!-- close .sidebar -->

	<div id="main-content-sidebar">
	
		
		<div class="bread-crumbs">Ud. esta en: <a href="{{ route('landing.index') }}">Nosotros</a> &rsaquo; Informaci&oacute;n</div>
		
		
		<p>IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales para diversas industrias, que nace como respuesta a la necesidad que tienen las organizaciones públicas y privadas con el objeto de mejorar su competitividad. El mayor compromiso que tenemos con nuestros clientes es acompańarlos en sus procesos de cambio para una mayor productividad, calidad y competitividad.<br> <br>
		<br>
Mantenemos un equipo multidisciplinario de profesionales altamente calificado, comprometidos con cada proyecto, los cuales cuentan con un contrato de confidencialidad; organizados en equipos de trabajo para un seguimiento continuo a su proyecto, con ello, podemos analizar y evaluar avances de cada consultoría y sus estados de desarrollo para asegurar el cumplimiento de los objetivos acordados con nuestros clientes.</p>

		<div class="divider-large"></div>

		<h3>MISIÓN, VISIÓN Y VALORES</h3>

		<div class="team-member">
			<img src="{{ asset('images/team-member01.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h4>Misión</h4>
			<h6></h6>
			<p>Ser una organización reconocida y de prestigio por brindar soluciones empresariales de alta calidad a nivel nacional, basando nuestro desempeño en la innovación y el trabajo en equipo y además de convertirnos en los socios estratégicos de nuestros clientes. </p>

		</div>
		<br />
		<div class="team-member">
			<img src="{{ asset('images/team-member02.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h4>Visión</h4>
			<h6></h6>
			<p>•	Una empresa con servicios líderes y confiables para nuestros consumidores.</br>
			•	Una empresa innovadora, que mira hacia el futuro.</br>
			•	Un lugar extraordinario para trabajar.</p>
		</div>
		<div class="divider-large"></div>
		<br>
		<h4>ESTRUCTURA</h4>
		<p>Mantenemos un equipo multidisciplinario de profesionales altamente calificado, comprometidos con cada proyecto, los cuales cuentan con un contrato de confidencialidad; organizados en equipos de trabajo para un seguimiento continuo a su proyecto, con ello, podemos analizar y evaluar avances de cada consultoría y sus estados de desarrollo para asegurar el cumplimiento de los objetivos acordados con nuestros clientes.<br> <br>
		<img src="{{ asset('images/valores.png') }}" alt="" class="aligncenter noborder" />
		<br>
		<h4>NUESTROS VALORES</h4>
		<div class="team-member">
			<img src="{{ asset('images/valor1.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>PASIÓN</h2>
			<h6></h6>
			<h4>Servimos con pasión</h4>
			<p>Nos entregamos en todo lo que hacemos</p>

		</div>
		<br />
		<div class="team-member">
			<img src="{{ asset('images/valor2.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>EQUIPO</h2>
			<h6></h6>
			<h4>Trabajamos en equipo</h4>
			<p>Colaboramos, sumamos esfuerzos, multiplicamos logros</p>
		</div>
		
		<br />
		<div class="team-member">
			<img src="{{ asset('images/valor3.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>CALIDAD</h2>
			<h6></h6>
			<h4>Trabajamos en equipo</h4>
			<p>Colaboramos, sumamos esfuerzos, multiplicamos logros</p>
		</div>
		
		<br />
		<div class="team-member">
			<img src="{{ asset('images/valor4.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>EFECTIVIDAD</h2>
			<h6></h6>
			<h4>Operamos con efectividad</h4>
			<p>Ejecutamos con precisión y excelencia</p>
		</div>
		
		<br />
		<div class="team-member">
			<img src="{{ asset('images/valor5.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>PERSONA</h2>
			<h6></h6>
			<h4>Valoramos a la persona</h4>
			<p>Vemos siempre al otro como persona, nunca como instrumento</p>
		</div>
		
		<br />
		<div class="team-member">
			<img src="{{ asset('images/valor6.png') }}" alt="" width="122" height="122" class="alignleft noborder" />
			<h2>ÉTICA</h2>
			<h6></h6>
			<h4>Tomamos la consciencia de lo que somos </h4>
			<p>Los negocios sin ética no son útiles</p>
		</div>
	</div><!-- close #main-content-sidebar -->
	

	
	
	
<div id="main-container-base"></div><!-- close #main-container-base -->	
</div><!-- close #main-container -->
</div><!-- close #main-container-bg -->

@stop