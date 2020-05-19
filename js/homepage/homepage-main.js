$(document).ready(function(){
	var container = $("#welcome-logo-cont");
	var logo = $("#welcome-logo");
	var statsScroll = false;
	var startWelcomeAnimation = false;

	function doResize(){
		scale = Math.min(
			$(container).height() / $(logo).height(), 
			$(container).width() / $(logo).width()
		);

		$(logo).css({
			"transform": "scale(" + scale + ")"
		});
	}

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

	function welcomeAnimation(){
		if(!startWelcomeAnimation){
			$("#welcome-background").animate({
				"opacity": "1"
			}, 500);

			if($(window).width() >= 538 && $(window).height() >= 551){
				$(".home-transparent-navi").css({
					//"color": 'black'
				});

				$("#welcome-background").animate({
					"border-width": "75px"
				}, 500);
			}
			else{
				$(".home-transparent-navi").css({
					//"color": 'white'
				});

				$("#welcome-background").animate({
					"border-width": "16px"
				}, 500);
			}

			$("#welcome-logo").animate({
				"opacity": "0"
			}, 1000).animate({
				"opacity": "1"
			}, 500);

			$("#navi-main-items").animate({
				"opacity": "0"
			}, 1250).animate({
				"opacity": "1"
			}, 500);

			startWelcomeAnimation = true;
		}
	}

	//welcomeResize();
	welcomeAnimation();
	animateAboutStats();
	doResize();

	$(window).resize(function(){
		//welcomeResize();

		if($(window).width() >= 538 && $(window).height() >= 551){
			$("#welcome-background").css({
				"border-width": "75px"
			});

			$(".home-transparent-navi").css({
				//"color": 'black'
			});
		}
		else{
			$("#welcome-background").css({
				"border-width": "16px"
			});

			$(".home-transparent-navi").css({
				//"color": 'white'
			});
		}
		doResize();
	});

	$(window).scroll(function(){
		//welcomeResize();
		animateAboutStats();
		doResize();
	});

	// For Contact:

	$("#contact-start-button").click(function(){
		var contact_us = $("#contact-form-sect").offset().top;

		$('html, body').animate({
			scrollTop: contact_us - 74
		}, 500);
	});
});