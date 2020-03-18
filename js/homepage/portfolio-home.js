$(document).ready(function(){
	var previous_width = $(window).width();

	function calculateOffset(){
		var neg = ($(window).width() - (-20)) - 673;
		//var pos = 774 - ($(window).width() - 20) + $(window).width();

		//console.log("neg set: " + (neg - 10)); // left overlap
		//console.log("pos set: " + pos); // right overlap

		if(neg < 0){
			$("#portfolio-cols").draggable({
				axis: "x",
				containment: [(neg - 10), 0, 20, 0]
			});
		}
		else{
			$("#portfolio-cols").draggable({
				axis: "x",
				containment: [20, 0, 20, 0]
			});
		}

		return neg;
	}

	function setDrag(){
		if($(window).width() <= 683){
			$("#portfolio-cols").css("cursor", "grab");
			$("#portfolio-cols").draggable("enable");
		}
		else{
			$("#portfolio-cols").draggable("disable");
			$("#portfolio-cols").css("cursor", "default");
			$("#portfolio-cols").css("right", "0");
			$("#portfolio-cols").css("left", "0");
		}
	}

	$("#portfolio-cols").draggable({
		axis: "x",
		scroll: false,
		containment: $(".portfolio-short")
	});

	$("#portfolio-cols").mousedown(function(){
		if($(window).width() <= 683){
			$("#portfolio-cols").css("cursor", "grabbing");
		}
	});

	$("#portfolio-cols").mouseup(function(){
		if($(window).width() <= 683){
			$("#portfolio-cols").css("cursor", "grab");

		}
	});

	setDrag();
	calculateOffset();

	$(window).resize(function(){
		setDrag();
		var neg = calculateOffset();
		if($(window).width() <= 683){
			var diff = $("#portfolio-cols").offset().left - neg;
			if(diff < -20){
				$("#portfolio-cols").css("left", ($("#portfolio-cols").offset().left - (diff + 20)) + "px");
			}	
		}
	});
});