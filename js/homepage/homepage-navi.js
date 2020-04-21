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
			$("#navi-bars-sect #main-navi-bars").fadeIn(200);

			$("#navi-main-items").css({
				"min-width": "0px",
				"transition": "min-width .5s ease-in-out 0s"
			});

			$(".main-navigation").removeClass("home-navigation");
		}
		else{
			$(".main-navigation").removeAttr("style");
			
			$("#welcome").removeAttr("style");
			$("#navi-logo-sect img").fadeOut(0);
			$("#navi-bars-sect #main-navi-bars").fadeOut(0);

			$("#navi-main-items").css({
				"min-width": "100%",
				"transition": "min-width .5s ease-in-out 0s"
			});

			$(".main-navigation").addClass("home-navigation");
		}
	}

	if($(document).scrollTop() >= window_offset){
		$("#navi-logo-sect img").css({
			"display": "block"
		});

		$("#navi-bars-sect #main-navi-bars").css({
			"display": "block"
		});

		$("#navi-main-items").css({
			"min-width": "0px"
		});

		$(".main-navigation").removeClass("home-navigation");
	}
	else{
		$("#navi-main-items").css({
			"min-width": "100%"
		});

		$(".main-navigation").addClass("home-navigation");
	}

	sticky();
	
	$(window).scroll(function(){
		sticky();
	});
});