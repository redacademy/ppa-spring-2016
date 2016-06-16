jQuery(document).ready(function( $ ) {

	//Functionality: Back to Top Scroll
	$('.back-to-top').click(function() {      // On Click of Class
	    $('body,html').animate({ scrollTop : 0}, 1000); // Scroll to top of body
	});

	//Functionality: Back Button
	$('.back-btn').click(function(){	// On Click of Class
		window.history.back(); //links back to the previous page of the browser
	})

});
