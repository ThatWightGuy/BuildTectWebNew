var navi_overlay_on = false;

function getSections(){
	var main_sections = $("body").find(".main-sect-cont");
	var section_object = {};
	var object_length = 0;

	for(var item = 0; item < main_sections.length; item++){
		if($(main_sections[item]).attr("navcolor") != undefined){
			section_object[object_length] = {
				"offset": $(main_sections[item]).offset().top,
				"color": $(main_sections[item]).attr("navcolor")
			};

			object_length++;
		}
	}

	section_object["length"] = object_length;

	return section_object;
}

function changeColor(){
	var sections = getSections();
	var position;

	for(var i = 0; i < sections.length; i++){
		if($(document).scrollTop() >= (sections[i].offset-75)){
			position = sections[i];
		}
	}

	if(position != undefined){
		if(navi_overlay_on){
			$(".main-navigation").removeClass("white-navi");
			$(".main-navigation").removeClass("blue-navi");
			$(".main-navigation").removeClass("dark-blue-navi");
			$(".main-navigation").addClass("transparent-navi");
		}
		else{
			if(position.color == "blue"){
				$(".main-navigation").removeClass("home-transparent-navi");
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").removeClass("dark-blue-navi");
				$(".main-navigation").addClass("blue-navi");
			}
			else if(position.color == "darkblue"){
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").removeClass("home-transparent-navi");
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").addClass("dark-blue-navi");
			}
			else if(position.color == "white"){
				$(".main-navigation").removeClass("home-transparent-navi");
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").removeClass("dark-blue-navi");
				$(".main-navigation").addClass("white-navi");
			}
			else if(position.color == "transparent"){
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").removeClass("dark-blue-navi");
				$(".main-navigation").removeClass("home-transparent-navi");
				$(".main-navigation").addClass("transparent-navi");
			}
			else if(position.color == "home-transparent"){
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").removeClass("dark-blue-navi");
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").addClass("home-transparent-navi");
			}
		}
	}
}

function mainOverlay(){
	if(!navi_overlay_on){
		navi_overlay_on = true;

		$("#main-navigation-overlay").fadeIn(200);
		$("#main-navigation-overlay").css({
			"border-width": "16px"
		});

		$(".main-navigation").css({
			"width": "calc(100% - 32px)",
			"margin": "16px"
		});

		changeColor();

		$(this).css({
			"transition-durration": ".2s"
		});
	}
	else{
		navi_overlay_on = false;
		
		$("#main-navigation-overlay").fadeOut(200);
		$("#main-navigation-overlay").css({
			"border-width": "0px"
		});

		$(".main-navigation").css({
			"width": "100%",
			"margin": "0"
		});

		changeColor();
	}
}

$(document).ready(function(){
	var item_bar = $(".navi-under-bar");
	var current_section;

	function getMainSections(){
		var main_sections = $("body").find(".main-sect");
		var main_sections_object = {};
		var object_length = 0;

		for(var i = 0; i < main_sections.length; i++){
			main_sections_object[$(main_sections[i]).attr("id")] = $(main_sections[i]).offset().top;
			object_length++;
		}

		return main_sections_object;
	}

	function underBar(listItem){
		if(listItem.length != 0){
			$(item_bar).css({
				"width": (listItem.width() + 20) + "px",
				"left": listItem[0].offsetLeft + "px"	
			});
		}
		else{
			$(item_bar).css({
				"width": "0px",
				"left": "0px"	
			});
		}
	}

	function underBarScroll(){
		var sections = getMainSections();

		for(let key in sections){
			if($(document).scrollTop() >= (sections[key] - 75)){
				current_section = $(".navi-main-item[pageid=" + key + "]");
			}
			else{
				break;
			}
		}

		underBar($(current_section));
	}

	/*function resizeOverlay(){
		var main_overlay = $("#main-navigation-overlay");
		var navi_overlay_cont = $("#navi-overlay-cont");
		var navi_overlay_inner = $(".navi-overlay-inner");

		main_overlay.css({
			"height": $(window).height() + "px"
		});

		navi_overlay_cont.css({
			"min-height": ($(window).height() - 107) + "px"
		});

		navi_overlay_inner.css({
			"min-height": ($(window).height() - 107) + "px"
		});
	}*/

	$(".navi-main-item").mouseenter(function(){
		underBar($(this));
	}).mouseleave(function(){
		underBar($(current_section));
	});

	$(".navi-main-item").click(function(){
		var scrollTo = $(".main-sect[id='" + $(this).attr("pageid") + "']").offset().top;
		
		// close overlay if open:
		if(navi_overlay_on){
			mainOverlay();
			toggleBarClose($("#main-navi-bars"));
			bar_close_open["main-navi-bars"] = false;
		}
		
		$('html, body').animate({
			scrollTop: scrollTo - 74
		}, 500);
	});

	$(".overlay-page-item").click(function(){
		var scrollTo = $(".main-sect[id='" + $(this).attr("pageid") + "']").offset().top;
		
		// close overlay if open:
		if(navi_overlay_on){
			mainOverlay();
			toggleBarClose($("#main-navi-bars"));
			bar_close_open["main-navi-bars"] = false;
		}
		
		$('html, body').animate({
			scrollTop: scrollTo - 74
		}, 500);
	});

	$("#main-navi-bars").click(function(){
		mainOverlay();
	});

	changeColor();
	underBarScroll();
	//resizeOverlay()

	$(window).scroll(function(){
		changeColor();
		underBarScroll();
		//resizeOverlay()
	});

	$(window).resize(function(){
		changeColor();
		underBarScroll();
		//resizeOverlay()
	});
});