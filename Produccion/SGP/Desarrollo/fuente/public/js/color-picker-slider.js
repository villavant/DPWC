$(document).ready(function() {
	$("div.panel_button").click(function(){
		$("div#panel").animate({
			left: "0px"
		}, "fast");
		$(".panel_button").animate({
			left: "150px"
		}, "fast");
		$("div.panel_button").toggle();
	});	
   $("div.hide_button").click(function(){
		$("div#panel").animate({
			left: "-150px"
		}, "fast");
		$(".panel_button").animate({
			left: "0px"
		}, "fast");
   });		
});
