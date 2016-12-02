@extends('landing.layout.base')


@section('content')

<div id="header-container">
	

<!-- Background Slides -->
<div id="featured-slider-outside">
<div id="featured-slider-container">
<div id="featured-slider-subcontainer">

		<div id="featured-page-title"> 
			<img src="{{ asset('images/sample-images/page-title10.jpg') }}" alt="background image" />
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


	<div id="page-title"><h2>Nuestros Proyectos</h2></div>
	
</div><!-- close #header-container -->

<div id="main-container-bg">
<div id="main-container">
	
	
	<div class="bread-crumbs">Ud. esta en: <a href="index.html">Proyectos</a> &rsaquo; Recientes</div>
	
	
	<div class="bread-crumb-portfolio">
		View: 
		<a href="#" class="selected_bread">All work</a>
		<a href="#">Print Design</a>
		<a href="#">Web Design</a>
		<a href="#">Logo Design</a>
	</div>
	
	
	<div id="portfolio">
		
		


		<div class="divider"></div>
		
		
		
		<div class="container">
			<div class="grid3column">
				<a href="images/portfolio/portfolio4.jpg" class="fancylightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio4thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>Print starts conversation</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="images/portfolio/portfolio4.jpg" title="Title can be filled in or removed easily" class="button fancylightbox">View more &rsaquo;</a>
			</div>
			<div class="grid3column">
				<a href="images/portfolio/portfolio5.jpg" class="fancylightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio5thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>How to be a Rockstar</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="images/portfolio/portfolio5.jpg" title="Title can be filled in or removed easily" class="button fancylightbox">View more &rsaquo;</a>
			</div>
			<div class="grid3column lastcolumn">
				<a href="http://www.youtube.com/embed/wTvtheJkthc?rel=0&amp;hd=1" class="videolightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio6thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>Youtube Lightbox Example</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="http://www.youtube.com/embed/wTvtheJkthc?rel=0&amp;hd=1" class="videolightbox button" title="Title can be filled in or removed easily">View more &rsaquo;</a>
			</div>
		</div>


		<div class="divider"></div>
		
		
		
		
		<div class="container">
			<div class="grid3column">
				<a href="images/portfolio/portfolio7.jpg" class="fancylightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio7thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>Print starts conversation</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="images/portfolio/portfolio7.jpg" title="Title can be filled in or removed easily" class="button fancylightbox">View more &rsaquo;</a>
			</div>
			<div class="grid3column">
				<a href="http://www.youtube.com/embed/wTvtheJkthc?rel=0&amp;hd=1" class="videolightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio8thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>Youtube Lightbox Example</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="http://www.youtube.com/embed/wTvtheJkthc?rel=0&amp;hd=1" class="videolightbox button" title="Title can be filled in or removed easily">View more &rsaquo;</a>
			</div>
			<div class="grid3column lastcolumn">
				<a href="images/portfolio/portfolio9.jpg" class="fancylightbox" title="Title can be filled in or removed easily"><img src="images/portfolio/portfolio9thumb.jpg" width="285" height="178" alt="portfolio" class="transparent" /></a>
				<h4>Say it in print</h4>
				<p>Nullam pretium enim sed lectus pulvi nar accum. Donec place nisl sit amet.</p>
				<a href="images/portfolio/portfolio9.jpg" title="Title can be filled in or removed easily" class="button fancylightbox">View more &rsaquo;</a>
			</div>
		</div>


		<div class="divider"></div>
		
		
	
	</div><!-- close #portfolio -->
	
	
	<!-- BEGIN PAGINATION -->
	<div class="pagination">
		<a href="#" class="selected">1</a>
		<a href="#">2</a>
		<a href="#">&rsaquo;</a>
	</div>
	<!-- END PAGINATION -->



	
<div id="main-container-base"></div><!-- close #main-container-base -->	
</div><!-- close #main-container -->
</div><!-- close #main-container-bg -->

@stop