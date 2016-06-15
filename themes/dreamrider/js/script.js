jQuery(document).ready(function( $ ) {

	$('.back-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({ scrollTop : 0}, 500); // Scroll to top of body
	});
	
});