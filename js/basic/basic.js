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
	var statsScroll = false;

	function animateAboutStats(){
		if(isOnScreen($(".about-stat")) && !statsScroll){
			$("#about-stats-inner").css({
				"opacity": "1"
			});
			$('.as-num-num').each(function () {
				var $this = $(this);
				jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			statsScroll = true;
		}
	}

	animateAboutStats();

	$(window).scroll(function(){
		animateAboutStats();
	});
});