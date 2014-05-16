(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$('section').fullpage({
			navigation: true,
			navigationPosition: 'right',
			css3: true,
			scrollOverflow: true
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
	
})(jQuery, this);
