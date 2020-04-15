$(document).ready(function(){
	var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
	var portfolio_sect = $("#portfolio-sect");
	var split_left = $(".sect-split-left"); 
	var main_overlay_time;
	var mobile_current;

	function over(main, e){
		var sibling = $($(main).closest(".portfolio-split-cont").siblings()[0]).find(".portfolio-img-inner-cont");
		var main_container = $(main).closest(".portfolio-split-cont");
		var sibling_container = $(sibling).closest(".portfolio-split-cont");
		var main_overlay = $(main).find(".main-overlay");
		var secondary_overlay = $(sibling).find(".secondary-overlay");
		var main_header = $(main).find(".portfolio-sect-cont-h1");
		//var sibling_header = $(sibling).find(".portfolio-sect-cont-h1");
		clearTimeout(main_overlay_time);

		if(e.target.nodeName != "H1"){
			main_overlay_time = setTimeout(function(){
				$(main_overlay).css({
					"height": "100%"
				});
				if($(window).width() > 1100){
					$(secondary_overlay).css({
						"height": "100%"
					});
				}
			}, 200);

			if($(window).width() > 1100){
				$(main).css({
					"height": $(portfolio_sect).height() + "px",
					"width": $(portfolio_sect).width()/2 + "px"
				});	
				$(sibling).css({
					"height": $(portfolio_sect).height() + "px",
					"width": $(portfolio_sect).width()/2 + "px"
				});		
			}

			if($(window).width() <= 1100){
				$(main_header).fadeOut(200);
			}
		}
	}

	function leave(main){
		var sibling = $($(main).closest(".portfolio-split-cont").siblings()[0]).find(".portfolio-img-inner-cont");
		var main_overlay = $(main).find(".main-overlay");
		var secondary_overlay = $(sibling).find(".secondary-overlay");
		var main_header = $(main).find(".portfolio-sect-cont-h1");
		
		// for cleanup
		var main_secondary = $(main).find(".secondary-overlay");
		var secondary_main = $(sibling).find(".main-overlay");

		clearTimeout(main_overlay_time);

		$(main).removeAttr("style");
		$(sibling).removeAttr("style");
		$(main_overlay).removeAttr("style");
		$(secondary_overlay).removeAttr("style");
		$(main_header).fadeIn(500);

		// for cleanup
		$(main_secondary).removeAttr("style");
		$(secondary_main).removeAttr("style");
	}

	if(!iOS){
		$(".portfolio-img-inner-cont").hover(function(e){
			over(this, e);
		}, function(){
			leave(this);
		});
	}
	else{
		$(".portfolio-img-inner-cont").click(function(e){
			if(mobile_current != undefined){
				leave(mobile_current)
			}

			over(this, e);
			mobile_current = this;
		});

		$("body").on("click", function(e){
			console.log(mobile_current, e)
			
			if((mobile_current != undefined) && (mobile_current != e.target)){
				leave(mobile_current);
				mobile_current = undefined;
			}
		});
	}
});