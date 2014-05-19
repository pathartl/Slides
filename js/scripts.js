(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		if ( $('body').hasClass('home') ) {
			$('body.home main').fullpage({
				navigation: true,
				navigationPosition: 'right',
				css3: true,
				scrollOverflow: true,
				resize: false
			});
		}

		$('.section').each(function() {
			// var colorThief = new ColorThief();
			// var image = $(this).children("img")[0];
			// console.log(colorThief.getColor(image));
		});

		// Generate the other elements for our nav
		$('nav li a').each(function() {
			var oldText = $(this).text();
			// Create our new spans
			$(this).text('').addClass('ddd')
			 .append('<span aria-hidden="true" class="ddd-box">' +
			 	'<span class="front">' + oldText + '</span><span class="back">' + oldText + '</span>' +
			 '</span>')
		});
	});

	$(window).ready(function() {
		$('.section .article .featured-image img').attr("data-adaptive-background", '1');
		$.adaptiveBackground.run();
	});
	
})(jQuery, this);