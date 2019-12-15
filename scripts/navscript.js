$(document).ready(function(){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 30){
			$('.navi-main').addClass("nav-main-scroll");
			$('.navi-cont').removeClass("white-text");
			$('.navi-cont').addClass("black-text");
			$('.navi-logo').removeClass("white-logo");
			$('.navi-logo').addClass("black-logo");
		}
		else{
			$('.navi-main').removeClass("nav-main-scroll");
			$('.navi-cont').addClass("white-text");
			$('.navi-cont').removeClass("black-text");
			$('.navi-logo').addClass("white-logo");
			$('.navi-logo').removeClass("black-logo");
		}
	});
});