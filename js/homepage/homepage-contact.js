$(document).ready(function(){
	function changeNav(){
		if(getFullWidth() <= 1000){
			$("#contact-form-split-right").attr("navcolor", "white");
		}
		else{
			$("#contact-form-split-right").attr("navcolor", "blue");
		}
	}

	changeNav();

	$(window).resize(function(){
		changeNav();
	})
});