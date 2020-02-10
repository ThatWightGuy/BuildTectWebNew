$(document).ready(function(){
	var original = $('html').css('overflow');
	//var img_height = $(".full-img-overlay-img").css('max-height');
	//var img_width = $(".full-img-overlay-img").css('max-width');
	var next;
	var current;
	var prev;

	function setImageSize(){
		if($(window).height() <= $(".full-img-overlay-img-cont").height()){
			$(".full-img-overlay-img").css('max-width', '100%');
			$(".full-img-overlay-img").css('max-height', '100vh');
		}
	}

	function setNextImages(){
		var id = $(current).attr('id');
		var img_url = $('#' + id).css('background-image');

		img_url = img_url.replace('url(','').replace(')','').replace(/\"/gi, "");
		$('.full-img-overlay-img').attr('src', img_url);

		setImageSize();

		if($(current).prev('.sect-short-img-cont').length > 0){
			prev = $(current).prev('.sect-short-img-cont');
		}
		else{
			prev = {'length': 0};
		}

		if($(current).next('.sect-short-img-cont').length > 0){
			next = $(current).next('.sect-short-img-cont');
		}
		else{
			next = {'length': 0};
		}

		if(prev.length == 0){
			$('#overlay-button-prev').removeClass('button-usable');
			$('#overlay-button-prev').addClass('button-unusable');
		}
		else{
			$('#overlay-button-prev').removeClass('button-unusable');
			$('#overlay-button-prev').addClass('button-usable');
		}

		if(next.length == 0){
			$('#overlay-button-next').removeClass('button-usable');
			$('#overlay-button-next').addClass('button-unusable');
		}
		else{
			$('#overlay-button-next').removeClass('button-unusable');
			$('#overlay-button-next').addClass('button-usable');
		}
	}

	// On click of zoom button:

	$('.img-cont-overlay-button').click(function(){
		$('.full-img-overlay').css('display', 'flex');
		//$('html').css('overflow', 'hidden');
		current = $(this).parent().parent();

		setNextImages();

	});

	// On left click anywhere on the overlay:

	/*$('#overlay-button-prev').click(function(){
		$('.full-img-overlay').css('display', 'flex');
		$('html').css('overflow', 'hidden');

		current = prev;
		setNextImages();
	});*/

	$('.full-img-overlay').click(function(event){
		var target = $(event.target);

		if(target.is('#overlay-button-prev')
			|| target.parent().is('#overlay-button-prev')
			|| target.is('#overlay-button-next')
			|| target.parent().is('#overlay-button-next')){
			
			if(target.is('#overlay-button-next') || target.parent().is('#overlay-button-next')){
				current = next;
				setNextImages();
			}
			else if(target.is('#overlay-button-prev') || target.parent().is('#overlay-button-prev')){
				current = prev;
				setNextImages();
			}
		}
		else{
			$('.full-img-overlay').css('display', 'none');
			$('.full-img-overlay-img').attr('src', '');
			$('html').css('overflow', original);
		}
	});

	// On window resize:

	$(window).resize(function(){
		//console.log("window: " + $(window).height());
		//console.log("img: " + $(".full-img-overlay-img").height());
		setImageSize();
	});

	$(window).on( "orientationchange", function(event){
		$('#test-orientation').text(event.orientation);
	});
});