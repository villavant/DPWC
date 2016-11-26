@extends('landing.layout.base')


@section('content')

<div id="header-container">
	
	
	

	

<!-- FEATURED SLIDER -->
<div id="featured-slider-outside2">
<div id="featured-slider-container">
<div id="featured-slider-subcontainer">

<div id="featured-main-slider">
	<div id="exposure"></div>			
	<!--div id="slideshow"></div--><!-- Play/Pause Button -->
	<div class="panel">
		<ul id="images">
			<li>
				<a href="{{ asset('images/sample-images/feature-slide1.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb1.jpg') }}" alt="feature-slide" />
				</a>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide2.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb2.jpg') }}" alt="feature-slide" />
				</a>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide3.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb3.jpg') }}" alt="feature-slide" />
				</a>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide4.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb4.jpg') }}" alt="feature-slide" />
				</a>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide5.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb5.jpg') }}" alt="feature-slide" />
				</a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide6.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb6.jpg') }}" alt="feature-slide" /></a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide7.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb7.jpg') }}" alt="feature-slide" />
				</a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide8.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb8.jpg') }}" alt="feature-slide" />
				</a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide9.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb9.jpg') }}" alt="feature-slide" />
				</a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide10.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb10.jpg') }}" alt="feature-slide" />
				</a>
				<div class="caption-area">
					IGP CONSULTING es una empresa dedicada a diseńar soluciones empresariales
				</div>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide11.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb11.jpg') }}" alt="feature-slide" />
				</a>
			</li>
			<li>
				<a href="{{ asset('images/sample-images/feature-slide12.jpg') }}">
					<img src="{{ asset('images/sample-images/feature-slide-thumb12.jpg') }}" alt="feature-slide" />
				</a>
			</li>
		</ul>
		<div id="controls"></div>
	</div><!-- close #panel -->
</div><!-- close #featured-main-slider -->

</div><!-- close #featured-slider-subcontainer -->
</div><!-- close #featured-slider-container -->
</div><!-- close #featured-slider-outside -->

<script type="text/javascript" src="{{ asset('js/jquery.exposure.min.js') }}"></script><!-- Gallery Slider JavaScript --> 

<!--script type="text/javascript">
//View/Hide Thumbnail JavaScript
$(document).ready(function() { 
    $(".panel").hide();
    $("#featured-main-slider").hover( 
        function(){ 
			$(".panel").stop(true, true).slideDown('medium'); 
		},
        function(){ 
			$(".panel").slideUp('medium'); 
		}
    );
});
</script-->
<!-- End FEATURED SLIDER -->

	
	
</div><!-- close #header-container -->

<div id="show-case-text-container">
	<div id="show-case-text">
		<a href="http://edccperu.com" target="_blank" class="show-case-button">ISO 9001</a>
		<h3> Organización Internacional de Normalización (ISO). Se pueden aplicar en cualquier tipo de organización o actividad orientada a la producción de bienes o servicios</h3>
	</div><!-- close #show-case-text -->
</div><!-- close #show-case-text-container -->

<div id="main-container-bg">
<div id="main-container">
	
	<div class="container">
		<div class="grid3column">
			<h3>Implantación de la Norma OHSAS 18001</h3>
			<img src="images/icons/unlimited-colors.png" alt="icon" width="61" height="54" class="noborder alignleft" />
			<p>Para el buen funcionamiento del sistema se debe formar un grupo interdisciplinario de personas que incluyan todos los departamentos de la organización, lo que permitare ver y analizar la problematica desde distintas ópticas.</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
		<div class="grid3column">
			<h3>La Salud Ocupacional</h3>
			<img src="images/icons/full-width.png" alt="icon" width="61" height="54" class="noborder alignleft" />
			<p>Se dice que la salud ocupacional es la disciplina encargada de promover y mantener literalmente el mas alto grado de bienestar físico, mental y social de los trabajadores en todas las ocupaciones, evitando en todo sentido el desmejoramiento de la salud causado por las condiciones de trabajo</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
		<div class="grid3column lastcolumn">
			<h3>Derechos y obligaciones en un programa de SST</h3>
			<img src="images/icons/cross-browser.png" alt="icon" width="61" height="54" class="noborder alignleft" />
			<p>Los empleadores deben obligatoriamente realizar las investigaciones de los accidentes de trabajo, enfermedades ocupacionales e incidentes peligrosos, los cuales deben comunicarse a las autoridades competentes dentro de un plazo establecido</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
	</div>
	
	<br />
	
	<div class="container">
		<div class="grid3column">
			<h3>Seguridad e Higiene Industrial</h3>
			<img src="images/icons/save-time.png" alt="icon" width="61" height="54" class="noborder alignleft" />
			<p>engloba un aspecto muy importante que las empresas deberían considerar vital, si en caso están en la búsqueda de establecer un sistema de Gestión en Seguridad y Salud en el Trabajo eficiente y exitoso, con lo cual se logrará beneficiar no solo a la al progreso de la compañía, sino que tambien se logrará cuidar la integridad de los trabajadores</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
		<div class="grid3column">
			<h3>OHSAS 18001:2007</h3>
			<img src="images/icons/get-started.png" alt="icon" width="61" height="54" class="noborder alignleft" />
			<p>Cada vez son mas las compañías que deciden implementar un sistema de gestión de la salud y la seguridad en el trabajo (SGSST) como una parte muy importante para mejorar su estrategia en cara a lograr una optima gestión de riesgos, lo que permitirá adaptarse de manera eficiente a cualquier cambio legislativo y ademas permitirá proteger a todo su personal.</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
		<div class="grid3column lastcolumn">
			<h3>¿Qué es ISO 9001:2008?</h3>
			<img src="images/icons/documentation.png" width="61" height="54" alt="icon" class="noborder alignleft" />
			<p>La ISO 9001:2008 es la base del sistema de gestion de la calidad ya que es una norma internacional y que se centra en todos los elementos de administración de calidad con los que una empresa debe contar para tener un sistema efectivo que le permita administrar y mejorar la calidad de sus productos o servicios.</p>
			<p><a href="#">Leer más &rsaquo;</a></p>
		</div>
	</div>
	
		
	<!-- BEGIN jCarousel -->
	<div id="carousel">
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script> 
		<script type="text/javascript">
		jQuery(document).ready(function() {
		    jQuery('#mycarousel').jcarousel({
		        scroll: 2, // The number of items to scroll by. 
				animation: "slow" //("slow" or "fast")
		    });
		});
		</script>
		<ul id="mycarousel" class="jcarousel-skin-tango">
			<li><a href="images/portfolio/portfolio23.jpg" class="fancylightbox"><img src="images/sample-images/carousel1.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio21.jpg" class="fancylightbox"><img src="images/sample-images/carousel2.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio20.jpg" class="fancylightbox"><img src="images/sample-images/carousel3.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio19.jpg" class="fancylightbox"><img src="images/sample-images/carousel4.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio18.jpg" class="fancylightbox"><img src="images/sample-images/carousel5.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio5.jpg" class="fancylightbox"><img src="images/sample-images/carousel6.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio17.jpg" class="fancylightbox"><img src="images/sample-images/carousel7.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		    <li><a href="images/portfolio/portfolio16.jpg" class="fancylightbox"><img src="images/sample-images/carousel8.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
			<li><a href="images/portfolio/portfolio15.jpg" class="fancylightbox"><img src="images/sample-images/carousel9.jpg" width="132" height="102" alt="carousel-image" class="transparent" /></a></li>
		  </ul>
	</div><!-- close #carousel -->
	
	
<div id="main-container-base"></div><!-- close #main-container-base -->	
</div><!-- close #main-container -->
</div><!-- close #main-container-bg -->

@stop