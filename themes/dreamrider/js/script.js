jQuery(document).ready(function($) {

	//Functionality: Back to Top Scroll
	$('.back-to-top').click(function() {      // On Click of Class
	    $('body,html').animate({ scrollTop : 0}, 1000); // Scroll to top of body
	});

	//initialize bxslider for Program Page
	$('.bxslider').bxSlider({
		pager:false
	});

	//Adds Modals class to the menu for Contact Pop up
	// $("#menu-footer-menu li:last-child a").addClass("eModal-1");
	// $(".desktop-nav li:last-child a").addClass("eModal-1");


	//Functionality: Scroll to Learning Benefits Section
	$('#menu-item-118 a').click(function(e){  //On Click of Class
		e.preventDefault();
		$('body,html').animate({ scrollTop : $('.learning-benefits').offset().top - 100}, 1000); //Scroll to section with class name
	});

	//Functionality: Scroll to Community Section
	$('#menu-item-119 a').click(function(e){  //On Click of Class
		e.preventDefault();
		$('body,html').animate({ scrollTop : $('.community-impact').offset().top - 100}, 1000); //Scroll to section with class name
	});

});



