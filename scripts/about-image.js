$(document).ready(function(){
	var original = $('html').css('overflow');
	var img_height = $(".full-img-overlay-img").css('max-height');
	var img_width = $(".full-img-overlay-img").css('max-width');
	// On click of zoom button:

	$('.img-cont-overlay-button').click(function(){
		$('.full-img-overlay').css('display', 'flex');
		$('html').css('overflow', 'hidden');
		
		var id = $(this).parent().parent().attr('id');
		var img_url = $('#' + id).css('background-image');

		img_url = img_url.replace('url(','').replace(')','').replace(/\"/gi, "");
		$('.full-img-overlay-img').attr('src', img_url);
	});

	// On left click anywhere on the overlay:

	$('.full-img-overlay').on('click', function(e){
		$('.full-img-overlay').css('display', 'none');
		$('html').css('overflow', original);
	});

	// On window resize:

	$(window).resize(function(){
		//console.log("window: " + $(window).height());
		//console.log("img: " + $(".full-img-overlay-img").height());

		if($(window).height() <= $(".full-img-overlay-img").height()+100){
			console.log("EQUAL!");
			$(".full-img-overlay-img").css('max-width', '100%');
			$(".full-img-overlay-img").css('max-height', '100%');
		}
		else{
			$(".full-img-overlay-img").css('max-width', img_width);
			$(".full-img-overlay-img").css('max-height', img_height);
		}
	});

});