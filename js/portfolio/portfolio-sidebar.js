$(document).ready(function(){
	var sidebar_offset = $("#portfolio-main-sect").height() + 75;

	var isClicked = {
		"Job-Type-Filter-Button": false, 
		"Project-Type-Filter-Button": false,
	}

	function sidebarSticky(){
		var contents_offset = ($(".main-navigation").offset().top) + "px";
		
		$(".portfolio-sidebar").css({
			"height": $("#portfolio-main-sect").height() + "px"
		});
		
		if(isOnScreen($(".main-footer"))){
			/*$(".portfolio-sidebar").css({
				"position": "absolute",
				"top": (($("#portfolio-main-sect").height() - $(this).height()) + 150) + "px"
			});*/

			$("#sidebar-contents").css({
				"position": "absolute",
				"top": contents_offset
			});
		}

		else{
			$("#sidebar-contents").css({
				"position": "fixed",
				"top": "75px"
			});
		}
	}

	$(".sidebar-filter-button")
	.mouseover(function(){
		$(this).css("background-color", "rgba(223, 238, 255, .3)");
	})
	.mouseout(function(){
		var id = $(this).attr("id");
		
		if(!isClicked[id]){
			$(this).css("background-color", "transparent");
		}
	});

	$(".sidebar-filter-button").click(function(){
		var id = $(this).attr("id");
		var indicator = $(this).find(".sidebar-button-indicator");
		var dropdown = $(this).siblings(".sidebar-filter-dropdown");
		var num_items = dropdown.children().length;

		if(!isClicked[id]){
			indicator.text("-");

			//height will be determined by number of items it has inside. This is just a test.
			$(this).css("background-color", "rgba(223, 238, 255, .3)");
			dropdown.css("height", (num_items*60) + "px");
			
			isClicked[id] = true;
		}
		else{
			indicator.text("+");
			$(this).css("background-color", "transparent");
			dropdown.css("height", "0px");

			isClicked[id] = false;
		}
	});

	sidebarSticky();

	$(window).resize(function(){
		sidebarSticky();
	});

	$(window).scroll(function(){
		sidebarSticky();
	});
});