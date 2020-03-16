$(document).ready(function(){
	var open = false;
	
	$(".sidebar-button").mouseover(function(){
		if(!open){
			$(this).css("transform", "translateX(15px)");
			$(".sidebar-icon").css("transform", "translateX(2px)");
		}
		else{
			$(this).css("transform", "translateX(-75px)");
			$(".sidebar-icon").css("transform", "translateX(-2px)");
		}
	})
	.mouseout(function(){
		$(this).css("transform", "translateX(-30px)");

		if(!open){
			$(".sidebar-icon").css("transform", "translateX(13px)");
		}
		else{
			$(".sidebar-icon").css("transform", "translateX(-14px)");
		}
	});

	$(".sidebar-button").click(function(){
		if(!open){
			$("#portfolio-main-sect").css("transform", "translateX(" + $(".portfolio-sidebar").width() + "px)");
			$(".sidebar-button-frame").css("transform", "translateX(" + $(".portfolio-sidebar").width() + "px)");
			$(".sidebar-button-frame").css("z-index", 2);
			$(".sidebar-icon").removeClass("fa-chevron-right").addClass("fa-chevron-left");
			$(".sidebar-icon").css("transform", "translateX(-14px)");
			open = true;
		}
		else{
			$("#portfolio-main-sect").css("transform", "translateX(0px)");
			$(".sidebar-button-frame").css("transform", "translateX(0px)");
			$(".sidebar-button-frame").css("z-index", 3);
			$(".sidebar-icon").removeClass("fa-chevron-left").addClass("fa-chevron-right");
			$(".sidebar-icon").css("transform", "translateX(13px)");
			open = false;
		}
	});
});