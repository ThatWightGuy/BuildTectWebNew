$(document).ready(function(){
	var page_width = $(window).width();

	function resize_section(){
		page_width = $(window).width();

		if(page_width > 600){
			$("#portfolio-cols-left").removeAttr("style");
			$("#portfolio-cols-right").removeAttr("style");

			$("#portfolio-cols-left").hover(
				function(){
					$(this).animate(
						{width: "100%"},
						{durration: 200}
					);
					$("#portfolio-cols-right").animate(
						{width: "0px"},
						{durration: 200}
					);
				},
				function(){
					$(this).animate(
						{width: "50%"},
						{durration: 200}
					);
					$("#portfolio-cols-right").animate(
						{width: "50%"},
						{durration: 200}
					);
				}
			);
			$("#portfolio-cols-right").hover(
				function(){
					$(this).animate(
						{width: "100%"},
						{durration: 200}
					);
					$("#portfolio-cols-left").animate(
						{width: "0px"},
						{durration: 200}
					);
				},
				function(){
					$(this).animate(
						{width: "50%"},
						{durration: 200}
					);
					$("#portfolio-cols-left").animate(
						{width: "50%"},
						{durration: 200}
					);
				}
			);
		}
	}

	/*resize_section();

	$(window).resize(function(){
		resize_section();
	});*/
});