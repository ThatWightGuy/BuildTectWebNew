var bar_close_open = {};

function toggleBarClose(barclose){
	var top = $(barclose).find(".top-bar");
	var mid = $(barclose).find(".mid-bar");
	var bottom = $(barclose).find(".bottom-bar");

	if(!bar_close_open[$(barclose).attr("id")]){
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
	}
}

$(document).ready(function(){
	function initBars(){
		var all_bars = $("body").find(".bars");

		for (var i = 0; i < all_bars.length; i++) {
			bar_close_open[$(all_bars[i]).attr("id")] = false;
		}
	}

	initBars();

	$(".bars-close").click(function(){
		toggleBarClose($(this));

		if(bar_close_open[$(this).attr("id")]){
			bar_close_open[$(this).attr("id")] = false;
		}
		else{
			bar_close_open[$(this).attr("id")] = true;
		}
	});
});