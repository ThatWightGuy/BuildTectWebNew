$(document).ready(function(){
	var bar_close_open = false;

	$(".bars-close").click(function(){
		var top = $(this).find(".top-bar");
		var mid = $(this).find(".mid-bar");
		var bottom = $(this).find(".bottom-bar");

		if(!bar_close_open){
			$(top).animate({
				"top": "50%"
			}, 100);

			$(mid).animate({
				"opacity": "0"
			}, 100);

			$(bottom).animate({
				"top": "50%"
			}, 100);

			$(top).animate(
				{deg: 45},
				{
					durration: 50,
					step: function(now){
						$(this).css({
							"transform": "rotate(" + now + "deg)"
						});
					}
				}
			);

			$(bottom).animate(
				{deg: -45},
				{
					durration: 50,
					step: function(now){
						$(this).css({
							"transform": "rotate(" + now + "deg)"
						});
					}
				}
			);
			
			bar_close_open = true;
		}
		else{
			$(top).animate(
				{deg: 0},
				{
					durration: 50,
					step: function(now){
						$(this).css({
							"transform": "rotate(" + now + "deg)"
						});
					}
				}
			);

			$(bottom).animate(
				{deg: 0},
				{
					durration: 50,
					step: function(now){
						$(this).css({
							"transform": "rotate(" + now + "deg)"
						});
					}
				}
			);

			$(top).animate({
				"top": "0px"
			}, 100);

			$(bottom).animate({
				"top": "100%"
			}, 100);

			$(mid).animate({
				"opacity": "0"
			}, 200);

			$(mid).animate({
				"opacity": "1"
			}, 100);

			bar_close_open = false;
		}
	});
});