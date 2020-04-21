$(document).ready(function(){
	var window_offset = $("#welcome-cont").height();

	function sticky(){
		window_offset = $("#welcome-cont").height();

		if($(document).scrollTop() >= window_offset){
			$(".main-navigation").css({
				"position": "fixed",
				"top": "0px"
			});

			$("#welcome").css({
				"margin-bottom": "100px"
			});

			$("#navi-logo-sect img").fadeIn(200);
			$("#navi-main-items").css({
				"min-width": "0px",
				"transition": "min-width .5s ease-in-out 0s"
			});
		}
		else{
			$(".main-navigation").removeAttr("style");
			$("#welcome").removeAttr("style");
			$("#navi-logo-sect img").fadeOut(0);
			$("#navi-main-items").css({
				"min-width": "100%",
				"transition": "min-width .5s ease-in-out 0s"
			});
		}
	}

	if($(document).scrollTop() >= window_offset){
		$("#navi-logo-sect img").css({
			"display": "block"
		});

		$("#navi-main-items").css({
			"min-width": "0px"
		});
	}
	else{
		$("#navi-main-items").css({
			"min-width": "100%"
		});
	}

	sticky();
	
	$(window).scroll(function(){
		sticky();
	});
});