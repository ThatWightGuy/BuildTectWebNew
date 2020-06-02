function layoutResize(){
	var port_width = $("#portfolio-main-sect").width();

	if((port_width <= 1600) && (port_width > 1250)){
		$("#portfolio-cont").removeClass("padding-100-50")
		.removeClass("padding-100-30")
		.removeClass("padding-100-20")
		.addClass("padding-100");

		$(".portfolio-item").removeClass("portfolio-item-1250")
		.removeClass("portfolio-item-920")
		.removeClass("portfolio-item-570")
		.addClass("portfolio-item-default");
	}
	else if((port_width <= 1250) && (port_width > 920)){
		$("#portfolio-cont").removeClass("padding-100")
		.removeClass("padding-100-30")
		.removeClass("padding-100-20")
		.addClass("padding-100-50");

		$(".portfolio-item").removeClass("portfolio-item-default")
		.removeClass("portfolio-item-920")
		.removeClass("portfolio-item-570")
		.addClass("portfolio-item-1250");
	}
	else if((port_width <= 920) && (port_width > 570)){
		$("#portfolio-cont").removeClass("padding-100")
		.removeClass("padding-100-50")
		.removeClass("padding-100-30")
		.addClass("padding-100-20");

		$(".portfolio-item").removeClass("portfolio-item-default")
		.removeClass("portfolio-item-1250")
		.removeClass("portfolio-item-570")
		.addClass("portfolio-item-920");
	}
	else if(port_width <= 570){
		$("#portfolio-cont").removeClass("padding-100")
		.removeClass("padding-100-50")
		.removeClass("padding-100-20")
		.addClass("padding-100-30");

		$(".portfolio-item").removeClass("portfolio-item-default")
		.removeClass("portfolio-item-1250")
		.removeClass("portfolio-item-920")
		.addClass("portfolio-item-570");
	}
	else{
		$("#portfolio-cont").removeClass("padding-100-50")
		.removeClass("padding-100-30")
		.removeClass("padding-100-20")
		.addClass("padding-100");

		$(".portfolio-item").removeClass("portfolio-item-1250")
		.removeClass("portfolio-item-920")
		.removeClass("portfolio-item-570")
		.addClass("portfolio-item-default");
	}
}

$(document).ready(function(){
	var open = false;

	function openSidebar(){
		if(!open){
			var sidebar_width = $(".portfolio-sidebar").width();

			$(".portfolio-sidebar").css("width", "300px");
			$("#sidebar-contents").css("width", "300px");

			if(getFullWidth() <= 600){
				$("#portfolio-main-sect").css("transform", "translateX(0px)");
				$("#portfolio-main-sect").css("width", $(window).width() + "px");
				$(".shade-overlay").css("display", "block");
			}
			else{
				$("#portfolio-main-sect").css("transform", "translateX(300px)");
				$("#portfolio-main-sect").css("width", "calc(" + $(window).width() + "px - 300px)");
				$(".shade-overlay").css("display", "none");
			}

			// all layout stuff goes here:
			layoutResize();

			// all layout stuff goes here (end)

			open = true;
		}
		else{
			$(".portfolio-sidebar").css("width", "0px");
			$("#sidebar-contents").css("width", "0px");
			$("#portfolio-main-sect").css("transform", "translateX(0px)");
			$("#portfolio-main-sect").css("width", $(window).width() + "px");
			$("#portfolio-main-sect").css("display", "flex");
			$(".shade-overlay").css("display", "none");

			// all layout stuff goes here:
			layoutResize();

			// all layout stuff goes here (end)	

			open = false;
		}
	}

	/*function closeSidebar(){
		if(open){
			$(".portfolio-sidebar").css("width", "0px");
			$("#portfolio-main-sect").css("transform", "translateX(0px)");
			$("#portfolio-main-sect").css("width", $(window).width() + "px");
			$("#portfolio-main-sect").css("display", "flex");
			$(".shade-overlay").css("display", "none");

			// all layout stuff goes here:
			layoutResize();

			// all layout stuff goes here (end)	

			open = false;
		}
	}*/

	$(".sidebar-button").click(function(){
		openSidebar();
	});

	// all layout stuff goes here:
	layoutResize();

	// all layout stuff goes here (end)

	$(window).resize(function(){

		if(open){
			var sidebar_width = $(".portfolio-sidebar").width();

			$(".portfolio-sidebar").css("width", "300px");
			sidebar_width = $(".portfolio-sidebar").width();
			
			if(getFullWidth() <= 600){
				$("#portfolio-main-sect").css("width", $(window).width() + "px");
				$("#portfolio-main-sect").css("transform", "translateX(0px)");
				$(".shade-overlay").css("display", "block");
			}
			else{
				$("#portfolio-main-sect").css("width", "calc(" + ($(window).width() - sidebar_width) + "px)");
				$("#portfolio-main-sect").css("transform", "translateX(" + sidebar_width + "px)");
				$(".shade-overlay").css("display", "none");
			}

			$(".sidebar-button-frame").css("transform", "translateX(" + sidebar_width + "px)");
		}
		else{
			$("#portfolio-main-sect").css("display", "flex");
			$("#portfolio-main-sect").css("width", $(window).width() + "px");
			$(".shade-overlay").css("display", "none");
		}

		layoutResize();

		/*if(isOnScreen($(".main-footer"))){
			closeSidebar();
		}*/
	});

	/*$(window).scroll(function(){
		if(isOnScreen($(".main-footer"))){
			closeSidebar();
		}
	});*/
});