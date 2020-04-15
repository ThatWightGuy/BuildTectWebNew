$(document).ready(function(){
	var testimonials = $("#about-testimonials-cont").find(".about-testimonial");
	var num_groups = 1;
	var prev_group_size = null;
	var current_group = null;
	var next_group = null;
	var prev_group = null;
	var groups = {};
	var page_width = $(window).width();

	function getNumGroups(group_size=3){
		if(prev_group_size == null){
			prev_group_size = group_size;
		}

		num_groups = Math.ceil(testimonials.length/group_size);
	}

	function getGroups(group_size=3){
		var current = 0;
		var result = {};
		var k = 0; 

		if(num_groups > 0){
			for (var i = 0; i < num_groups; i++){
				result[i] = [];
			}

			for (var i = 0; i < testimonials.length; i++) {
				if(k == group_size){
					current++;
					k = 0;
				}
				
				result[current].push(testimonials[i]);
				k++;
			}
		}

		groups = result;
	}

	function setInitGroups(group_size=3){
		if(current_group == null){
			if(num_groups > 0){
				current_group = 0;
				if(num_groups > 1){
					next_group = 1;
				}
				prev_group = null;
			}
		}
		else{
			if (current_group > num_groups-1) {
				current_group = num_groups-1;
				prev_group = current_group-1;
				
				if (current_group+1 >= num_groups-1) {
					next_group = null;
				}
				else{
					next_group = current_group + 1; 
				}

			}
			else if(current_group == num_groups-1){
				if(current_group == 0){
					prev_group = null;
					
					if(num_groups > 1){
						next_group = 1;
					}
					else{
						next_group = null;
					}
				}
				else{
					if (current_group == num_groups-1){
						if (current_group+1 >= num_groups-1){
							next_group = null;
						}
						else{
							next_group = current_group+1;
						}
						prev_group = current_group-1;
					}
				}
			}
			else{
				if(current_group+1 != num_groups-1){
					next_group = current_group+1;
					if(current_group == 0){
						prev_group = null;
					}
					else{
						prev_group = current_group-1; 
					}
				}
			}
		}
	}

	function showGroup() {
		for(var group = 0; group < num_groups; group++){
			for(var i = 0; i < groups[group].length; i++){
				if(group == current_group){
					$(groups[group][i]).css("display", "block");
				}
				else{
					$(groups[group][i]).css("display", "none");
				}
			}
		}
	}

	function showButtons(){
		if(prev_group != null){
			$("#testimonial-button-left").css("visibility", "visible");
		}
		else{
			$("#testimonial-button-left").css("visibility", "hidden");
		}

		if(next_group != null){
			$("#testimonial-button-right").css("visibility", "visible");
		}
		else{
			$("#testimonial-button-right").css("visibility", "hidden");
		}
	}

	function setDots(){
		var active = "<div class=\"about-test-dot-cont\"><div class=\"about-test-dot about-test-dot-active\"></div</div>";
		var inactive = "<div class=\"about-test-dot-cont\"><div class=\"about-test-dot about-test-dot-inactive\"></div</div>";
		var dot_container = $(".about-test-foot-cont");

		dot_container.empty();

		for(var i = 0; i < num_groups; i++){
			if(i == current_group){
				dot_container.append(active);
			}
			else{
				dot_container.append(inactive);
			}
		}
	}

	function doAll(){
		if(page_width > 1184) {
			getNumGroups();
			getGroups();
			setInitGroups();
			showButtons();
			showGroup();
			setDots();
		}
		else if(page_width <= 1184 && page_width > 724){
			getNumGroups(2);
			getGroups(2);
			setInitGroups(2);
			showButtons();
			showGroup();
			setDots();
		}
		else if(page_width <= 724){
			getNumGroups(1);
			getGroups(1);
			setInitGroups(1);
			showButtons();
			showGroup();
			setDots();
		}
	}

	doAll();
	//console.log("next_group:", next_group, "current_group:", current_group, "prev_group:", prev_group);

	$(window).resize(function(){
		page_width = $(this).width();

		doAll();
		//console.log("next_group:", next_group, "current_group:", current_group, "prev_group:", prev_group);
	});

	$(".test-button").click(function(){
		if($(this).val() == "left"){
			if(prev_group != null){
				next_group = current_group;
				current_group = prev_group;

				if(current_group == 0){
					prev_group = null;
				}
				else{
					prev_group = current_group-1;
				}

				showButtons();
				showGroup();
				setDots();
			}
		}
		else if($(this).val() == "right"){
			if(next_group != null){
				prev_group = current_group;
				current_group = next_group;

				if(current_group == (num_groups-1)){
					next_group = null;
				}
				else{
					next_group = current_group+1;
				}

				//console.log("next_group:", next_group, "current_group:", current_group, "prev_group:", prev_group);
				
				showButtons();
				showGroup();
				setDots();
			}
		}
	});
});