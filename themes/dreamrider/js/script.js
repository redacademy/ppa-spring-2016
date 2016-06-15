jQuery(document).ready(function( $ ) {

	//Function for scrollin back to top
	$('.back-to-top').click(function() {      // When arrow/back to ttpo text is clicked
	    $('body,html').animate({ scrollTop : 0}, 1000); // Scroll to top of body
	});



});