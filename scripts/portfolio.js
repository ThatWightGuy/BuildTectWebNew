$(document).ready(function(){
	function calculateOffset(){
		console.log("window: " + $(window).width());
		console.log("offset: " + $("#portfolio-cols").offset().left);
		console.log("neg set: " + (($(window).width() - (-20)) - 774)); // left overlap
		console.log("pos set: " + (($(window).width() - 20) - 774)); // right overlap
		console.log("added: " + (($(window).width() - $("#portfolio-cols").offset().left) - 774));
	}

	function setDrag(){
		if($(window).width() <= 783){
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
		drag: function(event, ui){
			calculateOffset()
		}
	});

	console.log();

	$("#portfolio-cols").mousedown(function(){
		if($(window).width() <= 783){
			$("#portfolio-cols").css("cursor", "grabbing");
		}
	});

	$("#portfolio-cols").mouseup(function(){
		if($(window).width() <= 783){
			$("#portfolio-cols").css("cursor", "grab");

		}
	});

	setDrag();
	calculateOffset();

	$(window).resize(function(){
		setDrag();
		calculateOffset();	
	});
});