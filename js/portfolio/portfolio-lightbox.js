function lightbox_open(){
	$(".portfolio-lightbox-open").click(function(){
		$(".portfolio-main-overlay").css({
			"z-index": "1002",
			"display": "flex"
		});
	});
}

$(document).ready(function(){
	var lightbox_info_open = false;

	function lightbox_info(){
		var width = $(window).width();

		if(width < 984){
			if(!lightbox_info_open){
				if(width <= 300){
					$(".portfolio-lightbox-info").animate({
						"width": "100%"
					}, 250);
				}
				else{
					$(".portfolio-lightbox-info").animate({
						"width": "300px"
					}, 250);
				}
				

				lightbox_info_open = true;
			}
			else{
				$(".portfolio-lightbox-info").animate({
					"width": "0px"
				}, 250);
				lightbox_info_open = false;
			}
		}
	}


	$(".portfolio-main-overlay").css({
		"z-index": "1002",
		"display": "none"
	});
	
	lightbox_open();

	$("#portfolio-lightbox-exit").click(function(){
		$(".portfolio-main-overlay").removeAttr("style");
	});

	$("#lightbox-info-button").click(function(){
		lightbox_info();
	});

	$(window).resize(function(){
		if($(window).width() >= 984){
			$(".portfolio-lightbox-info").removeAttr("style");
			lightbox_info_open = false;
		}
		else{
			if(lightbox_info_open){
				if($(window).width() <= 300){
					$(".portfolio-lightbox-info").css({
						"width": "100%"
					});
				}
				else{
					$(".portfolio-lightbox-info").css({
						"width": "300px"
					});
				}
			}
		}
	});
});