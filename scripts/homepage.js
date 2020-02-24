$(document).ready(function(){
	// Portfolio section:

	function setFrame(){
		var about_img_width = $(".sect-short-img-cont-main").width();
		var port_width = $(".portfolio-col-cont-main").width();

		// For About Gallery:
		
		$(".sect-short-img-cont-main").css("height", about_img_width + "px");

		// For Portfolio Cards
		
		if(($(window).width() <= 1583) && ($(window).width() >= 784)){
			$(".portfolio-col-cont-main").css("height", (port_width)*2 + "px");
		}
		else{
			$(".portfolio-col-cont-main").css("height", "800px");
		}
	}

	setFrame();

	$(window).resize(function(){
		setFrame();
	});
});