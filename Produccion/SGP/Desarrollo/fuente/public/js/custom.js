//Flickr Widget in Footer			
$(document).ready(function(){		 			   
	// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
	function displayImages(data) {																																   
		// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
		var iStart = Math.floor(Math.random()*(0));	
		
		// Reset our counter to 0
		var iCount = 1;								
		
		// Start putting together the HTML string
		var htmlString = "<ul>";					
		
		// Now start cycling through our array of Flickr photo details
		$.each(data.items, function(i,item){
									
			// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
			if (iCount > iStart && iCount < (iStart + 10)) {
				
				// I only want the ickle square thumbnails
				var sourceSquare = (item.media.m).replace("_m.jpg", "_s.jpg");		
				
				// Here's where we piece together the HTML
				htmlString += '<li><a href="' + item.link + '" target="_blank">';
				htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
				htmlString += '</a></li>';
			}
			// Increase our counter by 1
			iCount++;
		});		
		
	// Pop our HTML in the #images DIV	
	$('#flickrfooter').html(htmlString + "</ul>");
	
	// Close down the JSON function call
	}
	
// The end of our jQuery function	
});



//Flickr Widget in Sidebar			
$(document).ready(function(){		 			   
	// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
	function displayImages(data) {																																   
		// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
		var iStart = Math.floor(Math.random()*(0));	
		
		// Reset our counter to 0
		var iCount = 1;								
		
		// Start putting together the HTML string
		var htmlString = "<ul>";					
		
		// Now start cycling through our array of Flickr photo details
		$.each(data.items, function(i,item){
									
			// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
			if (iCount > iStart && iCount < (iStart + 7)) {
				
				// I only want the ickle square thumbnails
				var sourceSquare = (item.media.m).replace("_m.jpg", "_s.jpg");		
				
				// Here's where we piece together the HTML
				htmlString += '<li><a href="' + item.link + '" target="_blank">';
				htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
				htmlString += '</a></li>';
			}
			// Increase our counter by 1
			iCount++;
		});		
		
	// Pop our HTML in the #images DIV	
	$('#flickrsidebar').html(htmlString + "</ul>");
	
	// Close down the JSON function call
	}
	
// The end of our jQuery function	
});

//Lightbox Code
$(document).ready(function() { 
	$("a.fancylightbox").fancybox({
		'titleShow'     : true,
		'titlePosition'	: 'over',
		'transitionIn'	: 'fade',
		'transitionOut'	: 'fade',
		'overlayOpacity': '0.5',
		'overlayColor'  :  '#333'
	});
	$("a[rel=portfolio]").fancybox({
		'titleShow'     : true,
		'titlePosition'	: 'over',
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'overlayOpacity': '0.5',
		'overlayColor'  :  '#333'
	});
	$(".videolightbox").fancybox({
		'titleShow'     : false,
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe',
		'overlayOpacity': '0.5',
		'overlayColor'  :  '#333'
	});
	$(".buttonvideolightbox").fancybox({
		'titleShow'     : false,
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe',
		'overlayOpacity': '0.5',
		'overlayColor'  :  '#333'
	});
	$(".iframe-popup").fancybox({
			'width'				: '75%',
			'height'			: '75%',
	        'autoScale'     	: false,
	        'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe'
		});
});

//Transparency Adjustments
$(document).ready(function() {  
            $('.transparent').each(function() {
                $(this).hover(
                    function() {
                        $(this).stop().animate({ opacity: 0.7 }, 200);
                    },
                   function() {
                       $(this).stop().animate({ opacity: 1.0 }, 200);
                   })
                });
});

//Menu System
$(document).ready(function(){ 
    $("ul.sf-menu").supersubs({ 
        minWidth:    10,   // minimum width of sub-menus in em units 
        maxWidth:    25,   // maximum width of sub-menus in em units 
        extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                           // due to slight rounding differences and font-family 
    }).superfish();  // call supersubs first, then superfish, so that subs are 
                     // not display:none when measuring. Call before initialising 
                     // containing tabs for same reason. 
});

//Header Transparency Setting
$(document).ready(function() {  
$('#header-nav-container').transify({opacityOrig:.9, percentWidth:'100%'});
});



//Tool Tip JavaScript
$(document).ready(function(){ 
     $('.tool-tip').tipsy({trigger: 'focus', gravity: 's', fade: true});
});


(function($) {
    $.fn.tipsy = function(options) {

        options = $.extend({}, $.fn.tipsy.defaults, options);
        
        return this.each(function() {
            
            var opts = $.fn.tipsy.elementOptions(this, options);
            
            $(this).hover(function() {

                $.data(this, 'cancel.tipsy', true);

                var tip = $.data(this, 'active.tipsy');
                if (!tip) {
                    tip = $('<div class="tipsy"><div class="tipsy-inner"/></div>');
                    tip.css({position: 'absolute', zIndex: 100000});
                    $.data(this, 'active.tipsy', tip);
                }

                if ($(this).attr('title') || typeof($(this).attr('original-title')) != 'string') {
                    $(this).attr('original-title', $(this).attr('title') || '').removeAttr('title');
                }

                var title;
                if (typeof opts.title == 'string') {
                    title = $(this).attr(opts.title == 'title' ? 'original-title' : opts.title);
                } else if (typeof opts.title == 'function') {
                    title = opts.title.call(this);
                }

                tip.find('.tipsy-inner')[opts.html ? 'html' : 'text'](title || opts.fallback);

                var pos = $.extend({}, $(this).offset(), {width: this.offsetWidth, height: this.offsetHeight});
                tip.get(0).className = 'tipsy'; // reset classname in case of dynamic gravity
                tip.remove().css({top: 0, left: 0, visibility: 'hidden', display: 'block'}).appendTo(document.body);
                var actualWidth = tip[0].offsetWidth, actualHeight = tip[0].offsetHeight;
                var gravity = (typeof opts.gravity == 'function') ? opts.gravity.call(this) : opts.gravity;

                switch (gravity.charAt(0)) {
                    case 'n':
                        tip.css({top: pos.top + pos.height, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-north');
                        break;
                    case 's':
                        tip.css({top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-south');
                        break;
                    case 'e':
                        tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth}).addClass('tipsy-east');
                        break;
                    case 'w':
                        tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width}).addClass('tipsy-west');
                        break;
                }

                if (opts.fade) {
                    tip.css({opacity: 0, display: 'block', visibility: 'visible'}).animate({opacity: 0.8});
                } else {
                    tip.css({visibility: 'visible'});
                }

            }, function() {
                $.data(this, 'cancel.tipsy', false);
                var self = this;
                setTimeout(function() {
                    if ($.data(this, 'cancel.tipsy')) return;
                    var tip = $.data(self, 'active.tipsy');
                    if (opts.fade) {
                        tip.stop().fadeOut(function() { $(this).remove(); });
                    } else {
                        tip.remove();
                    }
                }, 100);

            });
            
        });
        
    };
    
    // Overwrite this method to provide options on a per-element basis.
    // For example, you could store the gravity in a 'tipsy-gravity' attribute:
    // return $.extend({}, options, {gravity: $(ele).attr('tipsy-gravity') || 'n' });
    // (remember - do not modify 'options' in place!)
    $.fn.tipsy.elementOptions = function(ele, options) {
        return $.metadata ? $.extend({}, options, $(ele).metadata()) : options;
    };
    
    $.fn.tipsy.defaults = {
        fade: false,
        fallback: '',
        gravity: 'n',
        html: false,
        title: 'title'
    };
    
    $.fn.tipsy.autoNS = function() {
        return $(this).offset().top > ($(document).scrollTop() + $(window).height() / 2) ? 's' : 'n';
    };
    
    $.fn.tipsy.autoWE = function() {
        return $(this).offset().left > ($(document).scrollLeft() + $(window).width() / 2) ? 'e' : 'w';
    };
    
})(jQuery);




//Twitter JavaScript
(function($){

 	$.fn.extend({ 
 		
		//pass the options variable to the function
 		jtwt: function(options) {


			//Set the default values, use comma to separate the settings, example:
			var defaults = {
				username : 'google',
                count : 1,
                image_size: 48,
                convert_links: 1,
                loader_text: 'loading new tweets'
			}
				
			var options =  $.extend(defaults, options);

    		return this.each(function() {
				var o = options;
                var obj = $(this);  
                
$(obj).append('<p id="jtwt_loader" style="display:none;">' + o.loader_text + '</p>');	
$("#jtwt_loader").fadeIn('slow');

			
						$.getJSON('http://twitter.com/status/user_timeline/' + o.username + '.json?count=' + o.count + '&callback=?', function(data){ 


               


			$.each(data, function(i, item) {       
            
                jtweet = '<div id="jtwt">';
                
                
                
                if (o.image_size != 0) {
                
                today = new Date();
  
                jtweet += '<div id="jtwt_picture">';
                jtweet += '<a href="http://twitter.com/' + item.user['screen_name'] + '">'
                jtweet += '<img width="' + o.image_size +'" height="' + o.image_size + '" src="' + item.user['profile_image_url'] + '" />';
                jtweet += '</a><br />';
                jtweet += '</div>';
                jtweet += '<div id="jtwt_tweet">';
                } 
                
                
               
                var tweettext = item.text;
                var tweetdate = item.created_at;
                
                if (o.convert_links != 0) {
                

  
                tweettext = tweettext.replace(/(http\:\/\/[A-Za-z0-9\/\.\?\=\-]*)/g,'<a href="$1">$1</a>');
                tweettext = tweettext.replace(/@([A-Za-z0-9\/_]*)/g,'<a href="http://twitter.com/$1">@$1</a>');
                tweettext = tweettext.replace(/#([A-Za-z0-9\/\.]*)/g,'<a href="http://twitter.com/search?q=$1">#$1</a>');
                
                }
                
                jtweet += '<div id="jtwt_text">';
                jtweet += tweettext;
                jtweet += '<br />';
                
                
                tweetdate = tweetdate.replace(/201.{1}/, "");
                tweetdate = tweetdate.replace(/\+00.{2}/, "");
                jtweet += '<a href="http://twitter.com/' + item.user['screen_name'] + '/statuses/' + item.id + '" id="jtwt_date">';
                
                jtweet += tweetdate;
                jtweet += '</a></div>';
                jtweet += '</div>';

   				$(obj).append(jtweet);
        
    


          		 });   
                 

$("#jtwt_loader").fadeOut('fast');   
           
		});
    
    
			
    		});
    	}
	});
	
})(jQuery);






// Transify v1.0 - Adjusts Transparency on Header
// COPYRIGHT JOREN RAPINI 2010
// jorenrapini@gmail.com
(function($){
	$.fn.transify = function(options) {
		var defaults = {
			opacityOrig:.6,  
			fadeSpeed:600
		  },
		  settings = $.extend({}, defaults, options);
		  
		this.each(function() {
			var $this = $(this);
			$this.append('<div class="transify"></div>');
			var transBG = $this.find('.transify');
			transBG.css({
				backgroundColor:$this.css('backgroundColor'),
				backgroundImage:$this.css('backgroundImage'),
				backgroundRepeat:$this.css('backgroundRepeat'),
				borderTopColor:$this.css('borderTopColor'),
				borderTopWidth:$this.css('borderTopWidth'),
				borderTopStyle:$this.css('borderTopStyle'),
				borderRightColor:$this.css('borderRightColor'),
				borderRightWidth:$this.css('borderRightWidth'),
				borderRightStyle:$this.css('borderRightStyle'),
				borderBottomColor:$this.css('borderBottomColor'),
				borderBottomWidth:$this.css('borderBottomWidth'),
				borderBottomStyle:$this.css('borderBottomStyle'),
				borderLeftColor:$this.css('borderLeftColor'),
				borderLeftWidth:$this.css('borderLeftWidth'),
				borderLeftStyle:$this.css('borderLeftStyle'),
				position:'absolute',
				top:0,
				left:0,
				zIndex:-1,
				width:$this.width()+parseInt($this.css("padding-left"), 10) + parseInt($this.css("padding-right"), 10),
				height:$this.height()+parseInt($this.css("padding-top"), 10) + parseInt($this.css("padding-bottom"), 10),
				opacity:settings.opacityOrig});
			if (settings.percentWidth) {
				transBG.css('width',settings.percentWidth);	
			}
			$this.css({
				zIndex:10,
				position:'relative',
				background:'none',
				border:'none'})
				
			if (settings.opacityNew) {
				$this.hover(function() {
					transBG.stop().animate({opacity:settings.opacityNew}, settings.fadeSpeed);
				}, function() {
					transBG.stop().animate({opacity:settings.opacityOrig}, settings.fadeSpeed);
				});
			}
		});
		return this;	
	}
})(jQuery);