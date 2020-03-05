$(document).ready(function(){
	function setFrame(){
		var about_img_width = $(".sect-short-img-cont-main").width();
		var port_width = $(".portfolio-col-cont-main").width();
		var contact_form_width = $("#contact-form-cont").width();
		// For About Gallery:
		
		$(".sect-short-img-cont-main").css("height", about_img_width + "px");

		// For Portfolio Cards:
		
		if(($(window).width() <= 1583) && ($(window).width() >= 684)){
			$(".portfolio-col-cont-main").css("height", (port_width)*2 + "px");
		}
		else{
			$(".portfolio-col-cont-main").css("height", "800px");
		}
	}

	function setTrianDiv(){
		var sect_divs = $(".sect-div");
		var top_heights = {
			"main-sect-about-sect-div": ($("#about-descriptions").height() + 100) + "px",
			"main-sect-portfolio-sect-div": ($("#portfolio-short").height()/2) + "px",
			"main-sect-contact-sect-div": ($("#contact-form-cont").height()/2) + "px",
		}

		if(sect_divs.length > 0){
			for(var i = 0; i < sect_divs.length; i++){
				var width = $(sect_divs[i]).width();

				if(top_heights[$(sect_divs[i]).attr("id")] != undefined){
					$("#" + $(sect_divs[i]).attr("id") + " .sect-div-top").css("height", top_heights[$(sect_divs[i]).attr("id")])
				}

				$(".sect-div-angle").css("border-right-width", width / 2 + "px");
				$(".sect-div-angle").css("border-left-width", width / 2 + "px");
			}
		}
	} 
	
	setFrame();
	setTrianDiv();

	$(window).resize(function(){
		setFrame();
		setTrianDiv();
	});
});