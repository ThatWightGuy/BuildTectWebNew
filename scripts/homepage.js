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

	function setTrianDiv(){
		var sect_divs = $(".sect-div");

		if(sect_divs.length > 0){
			for(var i = 0; i < sect_divs.length; i++){
				$(sect_divs[i]).css("border-left-width", $(window).width()/2 + "px");
				$(sect_divs[i]).css("border-right-width", $(window).width()/2 + "px");
				$(sect_divs[i]).css("top", $(sect_divs[i]).prev().offset().top + $(sect_divs[i]).prev().height() + "px");
				$(sect_divs[i]).css("border-top-color", $(sect_divs[i]).prev().css("background-color"));
			}
		}
	} 
	
	setTrianDiv();
	setFrame();

	$(window).resize(function(){
		setTrianDiv();
		setFrame();
	});
});