$(document).ready(function(){
	var item_bar = $(".navi-under-bar");
	var current_section;

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
			if($(document).scrollTop() >= (sections[i].offset-100)){
				position = sections[i];
			}
		}

		if(position != undefined){
			if(position.color == "blue"){
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").addClass("blue-navi");
			}
			else if(position.color == "white"){
				$(".main-navigation").removeClass("transparent-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").addClass("white-navi");
			}
			else if(position.color == "transparent"){
				$(".main-navigation").removeClass("white-navi");
				$(".main-navigation").removeClass("blue-navi");
				$(".main-navigation").addClass("transparent-navi");
			}
		}
	}

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
			if($(document).scrollTop() >= (sections[key] - 100)){
				current_section = $(".navi-main-item[id=" + key + "]");
			}
			else{
				break;
			}
		}

		underBar($(current_section));
	}

	$(".navi-main-item").mouseenter(function(){
		underBar($(this));
	}).mouseleave(function(){
		underBar($(current_section));
	});

	$(".navi-main-item").click(function(){
		var scrollTo = $(".main-sect[id='" + $(this).attr("id") + "']").offset().top;
		
		$('html, body').animate({
			scrollTop: scrollTo - 99
		}, 500);
	});

	changeColor();
	underBarScroll();

	$(window).scroll(function(){
		changeColor();
		underBarScroll();
	});
	$(window).resize(function(){
		changeColor();
		underBarScroll();
	});
});