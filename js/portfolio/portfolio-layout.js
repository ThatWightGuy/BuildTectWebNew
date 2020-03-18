$(document).ready(function(){
	var open = false;
	
	function itemResize(){
		var item_width = $(".portfolio-item").width();

		$(".portfolio-item").css("height", item_width + 30 + "px");
	}

	function layoutResize(){
		var port_width = $("#portfolio-main-sect").width();

		// For Portfolio-Cont Padding:

		if((port_width < 1584) && (port_width >= 1284)){
			$("#portfolio-cont").removeClass("padding-100-50")
			.removeClass("padding-100-30")
			.removeClass("padding-100-20")
			.addClass("padding-100");
		}
		else if((port_width < 1284) && (port_width >= 984)){
			$("#portfolio-cont").removeClass("padding-100")
			.removeClass("padding-100-30")
			.removeClass("padding-100-20")
			.addClass("padding-100-50");
		}
		else if((port_width < 984) && (port_width >= 684)){
			$("#portfolio-cont").removeClass("padding-100")
			.removeClass("padding-100-50")
			.removeClass("padding-100-30")
			.addClass("padding-100-20");
		}
		else if(port_width < 684){
			$("#portfolio-cont").removeClass("padding-100")
			.removeClass("padding-100-50")
			.removeClass("padding-100-20")
			.addClass("padding-100-30");
		}
		else{
			$("#portfolio-cont").removeClass("padding-100-50")
			.removeClass("padding-100-30")
			.removeClass("padding-100-20")
			.addClass("padding-100");
		}

		// For Portfolio Items:

		if((port_width <= 1600) && (port_width > 1250)){
			$(".portfolio-item").removeClass("portfolio-item-1250")
			.removeClass("portfolio-item-920")
			.removeClass("portfolio-item-570")
			.addClass("portfolio-item-default");
		}
		else if((port_width <= 1250) && (port_width > 920)){
			$(".portfolio-item").removeClass("portfolio-item-default")
			.removeClass("portfolio-item-920")
			.removeClass("portfolio-item-570")
			.addClass("portfolio-item-1250");
		}
		else if((port_width <= 920) && (port_width > 570)){
			$(".portfolio-item").removeClass("portfolio-item-default")
			.removeClass("portfolio-item-1250")
			.removeClass("portfolio-item-570")
			.addClass("portfolio-item-920");
		}
		else if(port_width <= 570){
			$(".portfolio-item").removeClass("portfolio-item-default")
			.removeClass("portfolio-item-1250")
			.removeClass("portfolio-item-920")
			.addClass("portfolio-item-570");
		}
		else{
			$(".portfolio-item").removeClass("portfolio-item-1250")
			.removeClass("portfolio-item-920")
			.removeClass("portfolio-item-570")
			.addClass("portfolio-item-default");
		}
	}

	function openSidebar(){
		var window_width = $(window).width();

		if(!open){
			var sidebar_width = $(".portfolio-sidebar").width();

			$("#portfolio-main-sect").css("transform", "translateX(" + sidebar_width + "px)");
			$("#portfolio-main-sect").css("width", "calc(" + (window_width - sidebar_width) + "px)");
			$(".sidebar-button-frame").css("transform", "translateX(" + sidebar_width + "px)");
			$(".sidebar-button-frame").css("z-index", 2);
			$(".sidebar-icon").removeClass("fa-chevron-right").addClass("fa-chevron-left");
			$(".sidebar-icon").css("transform", "translateX(-14px)");
			
			if($(window).width() <= 584){
				$("#portfolio-main-sect").css("display", "none");
			}
			else{
				$("#portfolio-main-sect").css("display", "flex");
			}

			// all layout stuff goes here:
			layoutResize();
			itemResize();

			// all layout stuff goes here (end)

			open = true;
		}
		else{
			$("#portfolio-main-sect").css("transform", "translateX(0px)");
			$("#portfolio-main-sect").css("width", window_width + "px");
			$(".sidebar-button-frame").css("transform", "translateX(0px)");
			$(".sidebar-button-frame").css("z-index", 3);
			$(".sidebar-icon").removeClass("fa-chevron-left").addClass("fa-chevron-right");
			$(".sidebar-icon").css("transform", "translateX(13px)");

			$("#portfolio-main-sect").css("display", "flex");

			// all layout stuff goes here:
			layoutResize();
			itemResize();

			// all layout stuff goes here (end)	

			open = false;
		}
	}

	$(".sidebar-button").mouseover(function(){
		if(!open){
			$(this).css("transform", "translateX(15px)");
			$(".sidebar-icon").css("transform", "translateX(2px)");
		}
		else{
			$(this).css("transform", "translateX(-75px)");
			$(".sidebar-icon").css("transform", "translateX(-2px)");
		}
	})
	.mouseout(function(){
		$(this).css("transform", "translateX(-30px)");

		if(!open){
			$(".sidebar-icon").css("transform", "translateX(13px)");
		}
		else{
			$(".sidebar-icon").css("transform", "translateX(-14px)");
		}
	});

	$(".sidebar-button").click(function(){
		openSidebar();
	});

	// all layout stuff goes here:
	layoutResize();
	itemResize();

	// all layout stuff goes here (end)

	$(window).resize(function(){
		layoutResize();
		itemResize();

		var window_width = $(window).width();

		if(open){
			var sidebar_width = $(".portfolio-sidebar").width();
			
			$("#portfolio-main-sect").css("transform", "translateX(" + sidebar_width + "px)");
			$("#portfolio-main-sect").css("width", "calc(" + (window_width - sidebar_width) + "px)");
			$(".sidebar-button-frame").css("transform", "translateX(" + sidebar_width + "px)");

			if($(window).width() <= 584){
				$("#portfolio-main-sect").css("display", "none");
			}
			else{
				$("#portfolio-main-sect").css("display", "flex");
			}
		}
		else{
			$("#portfolio-main-sect").css("display", "flex");
			$("#portfolio-main-sect").css("width", window_width + "px");
		}
	});
});