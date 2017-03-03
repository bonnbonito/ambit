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
	
	
});
