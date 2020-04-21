$(document).ready(function(){
	var sections; 
	var item_bar = $(".navi-under-bar");

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
		sections = getSections();
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

	function underBar(listItem){
		$(item_bar).css({
			"width": (listItem.width() + 20) + "px",
			"left": listItem[0].offsetLeft + "px"	
		});
	}


	$(".navi-main-item").mouseenter(function(){
		underBar($(this));
	});

	changeColor();
	
	$(window).scroll(function(){
		changeColor();
	});
	$(window).resize(function(){
		changeColor();
	});
});