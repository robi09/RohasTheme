jQuery(document).ready(function($) {

	function heightMatch(to, from) {
		$(to).css('height', $(from).outerHeight());
	}

	$(window).load(function() {
		$(window).resize(function() {
			
			//Height match for posts on index page
			if($(window).width() > 768) {
				if(!$('.post').hasClass('single-post') ) {
					$('.post').each(function(x, y) {
						heightMatch($(y).children('.featured_image'), $(y).children('.post_content'));
					});
				}
			}
		}).trigger('resize');
	});
	
});