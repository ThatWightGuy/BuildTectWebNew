let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

function isOnScreen(elem) {
	var elementTop = $(elem).offset().top;
	var elementBottom = elementTop + $(elem).outerHeight();
	var viewportTop = $(window).scrollTop();
	var viewportBottom = viewportTop + $(window).height();

	return elementBottom > viewportTop && elementTop < viewportBottom;
}

$(document).ready(function(){
	var redirectScroll = false;

	if((scrollData != "") && !redirectScroll){
		var scrollTo = $(".main-sect[id='" + scrollData + "']").offset().top;
		
		$('html, body').animate({
			scrollTop: scrollTo - 74
		}, 500);

		redirectScroll = true;
	}
});