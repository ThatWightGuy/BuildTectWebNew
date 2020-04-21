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


	doResize();

	$(window).resize(function(){
		doResize();
	});
});