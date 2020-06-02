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

	function lightbox_info_cont(){
		var width = getFullWidth();

		if(width < 1020){
			if($(window).width() <= 300){
				$(".portfolio-lightbox-info-cont").css({
					"width": $(window).width() + "px"
				}, 250);
			}
			else{
				$(".portfolio-lightbox-info-cont").css({
					"width": "300px"
				}, 250);
			}
		}
		else{
			$(".portfolio-lightbox-info-cont").removeAttr("style");
		}
	}

	function lightbox_info(){
		var width = getFullWidth();

		if(width < 1020){
			if(!lightbox_info_open){
				if($(window).width() <= 300){
					console.log("here");
					$(".portfolio-lightbox-info").animate({
						"width": "100%"
					}, 250);
				}
				else{
					$(".portfolio-lightbox-info").animate({
						"width": "300px"
					}, 250);
				}

				$("#lightbox-info-button h6").html("Close Info");

				lightbox_info_open = true;
			}
			else{
				$(".portfolio-lightbox-info").animate({
					"width": "0px"
				}, 250);

				//$("#lightbox-info-button-cont").removeAttr("style");
				$("#lightbox-info-button h6").html("Project Info");

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

	lightbox_info_cont();
	
	$(window).resize(function(){
		if(getFullWidth() >= 1020){
			$(".portfolio-lightbox-info").removeAttr("style");
			$("#lightbox-info-button h6").html("Project Info");
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

		lightbox_info_cont();
	});
});