$(document).ready(function(){
	// Portfolio section:

	$(window).resize(function(){
		var width = $(".portfolio-col-cont-main").width();

		if($(window).width() <= 783){
			$(".portfolio-col-cont-main").css("height", width + "px");
		}
		else if($(window).width() <= 1583){
			$(".portfolio-col-cont-main").css("height", (width)*2 + "px");
		}
		else{
			$(".portfolio-col-cont-main").css("height", "800px");
		}
	});
});