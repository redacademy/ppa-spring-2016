jQuery(document).ready(function() {

	//Functionality: Back to Top Scroll
	jQuery('.back-to-top').click(function() {      // On Click of Class
	    jQuery('body,html').animate({ scrollTop : 0}, 1000); // Scroll to top of body
	});

	//Functionality: Back Button
	jQuery('.back-btn').click(function(){	// On Click of Class
		window.history.back(); //links back to the previous page of the browser
	});

	//initialize bxslider for Program Page
	jQuery('.bxslider').bxSlider({
		pager:false
	});

	//Adds Modals class to the menu for Contact Pop up
	jQuery("#menu-footer-menu li:last-child a").addClass("eModal-1");


});
