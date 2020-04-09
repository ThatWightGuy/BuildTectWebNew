$(document).ready(function(){
	var portfolio_sect = $("#portfolio-sect");
	var split_left = $(".sect-split-left"); 
	var main_overlay_time;

	$(".portfolio-img-inner-cont").mouseover(function(e){
		var sibling = $($(this).closest(".portfolio-split-cont").siblings()[0]).find(".portfolio-img-inner-cont");
		var main_overlay = $(this).find(".main-overlay");
		var secondary_overlay = $(sibling).find(".secondary-overlay");

		if(e.target.nodeName != "H1"){
			main_overlay_time = setTimeout(function(){
				$(main_overlay).css({
					"height": "100%"
				});
				$(secondary_overlay).css({
					"height": "100%"
				});
			}, 200);

			if($(window).width() <= 1100){
				$(this).css({
					"height": $(portfolio_sect).height()/2 + "px",
					"width": $(split_left).width() + "px"
				});	
				$(sibling).css({
					"height": $(portfolio_sect).height()/2 + "px",
					"width": $(split_left).width() + "px"
				});	
				if($(window).width() > 430){
					if($(this).attr("id") == "portfolio-left-inner"){
						$(this).css({
							"margin-bottom": "25px"
						});
						$(sibling).css({
							"margin-top": "25px"
						});
					}
					else{
						$(this).css({
							"margin-top": "25px"
						});
						$(sibling).css({
							"margin-bottom": "25px"
						});
					}
					
				}
			}
			else{
				$(this).css({
					"height": $(portfolio_sect).height() + "px",
					"width": $(portfolio_sect).width()/2 + "px"
				});	
				$(sibling).css({
					"height": $(portfolio_sect).height() + "px",
					"width": $(portfolio_sect).width()/2 + "px"
				});			
			}
		}
	}).mouseleave(function(){
		var sibling = $($(this).closest(".portfolio-split-cont").siblings()[0]).find(".portfolio-img-inner-cont");
		var main_overlay = $(this).find(".main-overlay");
		var secondary_overlay = $(sibling).find(".secondary-overlay");
		
		// for cleanup
		var main_secondary = $(this).find(".secondary-overlay");
		var secondary_main = $(sibling).find(".main-overlay")

		clearTimeout(main_overlay_time);

		$(this).removeAttr("style");
		$(sibling).removeAttr("style");
		$(main_overlay).removeAttr("style")
		$(secondary_overlay).removeAttr("style")

		// for cleanup
		$(main_secondary).removeAttr("style")
		$(secondary_main).removeAttr("style")
	});
});