$(document).ready(function(){
	var window_offset = $("#welcome-cont").height();
	var change_bars = true;
	var first_load = true;


	function sticky(){
		window_offset = $("#welcome-cont").height();

		if($(document).scrollTop() >= window_offset){
			$(".main-navigation").css({
				"position": "fixed",
				"top": "0px",
				"transition-property": "height, background-color, width, margin",
				"transition-duration": ".2s, .2s, .2s, .2s"
			});

			$("#welcome").css({
				"margin-bottom": "75px"
			});

			$("#navi-logo-sect img").fadeIn(200);
			$("#navi-bars-sect #main-navi-bars").fadeIn(200);

			$("#navi-main-items").css({
				"min-width": "0px",
				"transition": "min-width .5s ease-in-out 0s"
			});

			$(".main-navigation").removeClass("home-navigation");

			change_bars = true; 
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

			navi_overlay_on = false;

			$("#main-navigation-overlay").fadeOut(200);
			$("#main-navigation-overlay").css({
				"border-width": "0px"
			});


			$(".main-navigation").css({
				"width": "100%",
				"margin": "0",
				"transition-property": "width, margin",
				"transition-duration": ".2s, .2s"
			});
			
			if(change_bars && bar_close_open["main-navi-bars"]){
				toggleBarClose($("#main-navi-bars"));
				bar_close_open["main-navi-bars"] = false;

				change_bars = false; 
			}
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