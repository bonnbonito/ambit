jQuery(document).ready(function($) {	
	

	$('.entry-content').imagesLoaded().progress( function( instance ) {
		$('.entry-content img').each( function(){
				// Create new offscreen image to test
				$(this).addClass('img-fluid');
			});
	});

	function enableScroll() {
		if ($( window ).width() < 991) {
			$('body').niceScroll({
				zindex : 999999,
				cursorwidth : 10,
				cursorborder : "1px solid #000",
				cursoropacitymax : .7,
				cursorminheight: 5
			});	
		} else {
			$('body').getNiceScroll().remove();
		}
	}
	
	enableScroll();		
	

	$( window ).resize(function(event) {
		/* Act on the event */
		enableScroll();
	});

	$(".showDef").on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
	});

	$('.slides').slick({
		dots: false,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [		
		{
			breakpoint: 600,
			settings: {
				arrows: false
			}
		}		
		]
	});	

	$('.showDefLg').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.showDefLg').not(this).removeClass('active');
		$(this).addClass('active');
		var dataId = $(this).data('content-id');

		$(".projectDetails").hide();
		$(".projectDetails[data-content-id='"+dataId+"']").fadeIn();
	});

	$('.projectDetails .close').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.showDefLg').removeClass('active');
		$(this).parent().fadeOut();
	});

	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});

	$('#hamburger').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('.main-navigation ul').slideToggle();
	});

	$('.main-navigation a').on('click', function(event) {
		if ($(window).width() < 992) {
			$('.main-navigation ul').hide();
		}
	});

	
});
