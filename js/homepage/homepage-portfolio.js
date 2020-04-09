$(document).ready(function(){
	var portfolio_sect = $("#portfolio-sect");
	var split_left = $(".sect-split-left"); 
	var main_overlay_time;

	$(".portfolio-img-inner-cont").mouseover(function(e){
		var overlay = $(this).find(".portfolio-inner-cont-overlay");
		
		if(e.target.nodeName != "H1"){
			main_overlay_time = setTimeout(function(){
				$(overlay).css({
					"height": "100%"
				});
			}, 200);

			if($(window).width() <= 1100){
				$(this).css({
					"height": $(portfolio_sect).height()/2 + "px",
					"width": $(split_left).width() + "px"
				});	
			}
			else{
				$(this).css({
					"height": $(portfolio_sect).height() + "px",
					"width": $(portfolio_sect).width()/2 + "px"
				});			
			}
		}
	}).mouseleave(function(){
		var overlay = $(".portfolio-img-inner-cont .portfolio-inner-cont-overlay");
		clearTimeout(main_overlay_time);

		$(this).removeAttr("style");
		$(overlay).removeAttr("style")
	});
});