$(document).ready(function(){
	$(".portfolio-lightbox-open").click(function(){
		$(".portfolio-main-overlay").css({
			"display": "flex"
		});
		console.log("click");
	});

	$("#portfolio-lightbox-exit").click(function(){
		$(".portfolio-main-overlay").css({
			"display": "none"
		});
	});
});