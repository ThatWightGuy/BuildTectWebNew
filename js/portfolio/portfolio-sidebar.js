$(document).ready(function(){
	var isClicked = {
		"Job-Type-Filter-Button": false, 
		"Project-Type-Filter-Button": false,
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
});