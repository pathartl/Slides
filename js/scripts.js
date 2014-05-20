(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$(window).ready(function() {
		if ( $('body').hasClass('home') || $('body').hasClass('category') ) {
			
			var anchors = [];

			$('.section').each(function() {
				anchors.push($(this).data('anchor'));
			});

			$('main').fullpage({
				navigation: true,
				navigationPosition: 'right',
				css3: true,
				scrollOverflow: true,
				resize: false,
				anchors: anchors
			});
		}
	});

	});

	$(window).ready(function() {
		$('.section .article .featured-image img').attr("data-adaptive-background", '1');
		$.adaptiveBackground.run();
	});
	
})(jQuery, this);