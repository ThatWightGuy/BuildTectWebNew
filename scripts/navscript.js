$(document).ready(function(){
	$(window).scroll(function(){
		var next_position = $('#about').position().top
		if ($(document).scrollTop() > next_position-25){
			$('.navi-main').css('display', 'flex');
		}
		else{
			$('.navi-main').css('display', 'none');
		}
	});

	$('.welcome-nav-i')
	.mouseover(function(){
		$(this).removeClass('fa-angle-down');
		$(this).addClass('fa-angle-double-down');
	})
	.mouseout(function(){
		$(this).removeClass('fa-angle-double-down');
		$(this).addClass('fa-angle-down');
	});

	var date = new Date();
	$('.footer-year').append(date.getFullYear());
});