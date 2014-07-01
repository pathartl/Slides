(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$(window).ready(function() {
		if ( $('body').hasClass('home') || $('body').hasClass('category') || $('body').hasClass('archive') ) {
			
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
				anchors: anchors,
				fixedElements: '.pagination .next, .pagination .prev'
			});
		}

		// Masonry
		$('#footer-area-2').masonry({itemSelector: '.fluid-widget'});

		$('li.archive-accordion-year').click(function() {
				$('#footer-area-2').masonry('reloadItems');	
		});

		// YouTube Container
		$("iframe[src*='://www.youtube.com").wrap("<div class='youtube-player'></div>");
	});

	});

	$(window).ready(function() {
		$('.section .article .featured-image img').attr("data-adaptive-background", '1');
		$.adaptiveBackground.run({
    		selector: 'article .featured-image img',
    		  parent: '.section',
    		 exclude: []
		});
	});
	
})(jQuery, this);