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

/*$(document).ready(function(){
	
	function changeVH(){
		var vh = $(window).height() * 0.01;
		$(":root")[0].style.setProperty('--vh', `${vh}px`);
	}

	changeVH();

	$(window).resize(function(){
		changeVH();
	});
});*/