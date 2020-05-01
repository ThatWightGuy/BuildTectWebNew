$(document).ready(function(){
	var container = $("#welcome-logo-cont");
	var logo = $("#welcome-logo");

	function doResize(){
		scale = Math.min(
			$(container).height() / $(logo).height(), 
			$(container).width() / $(logo).width()
		);

		$(logo).css({
			"transform": "scale(" + scale + ")"
		});
	}

	/*function welcomeResize(){
		var welcome = $("#welcome-logo-cont");
		var welcome_back = $("#welcome-background");

		welcome.css({
			"height": ($(window).height() - 125) + "px" 
		});

		welcome_back.css({
			"height": ($(window).height()) + "px" 
		});
	}*/

	//welcomeResize();
	doResize();

	$(window).resize(function(){
		//welcomeResize();
		doResize();
	});

	$(window).scroll(function(){
		//welcomeResize();
		doResize();
	});

	// For Contact:

	$("#contact-start-button").click(function(){
		var contact_us = $("#contact-form-sect").offset().top;

		$('html, body').animate({
			scrollTop: contact_us - 74
		}, 500);
	})
});