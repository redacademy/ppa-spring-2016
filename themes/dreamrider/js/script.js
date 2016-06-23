jQuery(document).ready(function($) {

	//Functionality: Back to Top Scroll
	$('.back-to-top').click(function() {      // On Click of Class
	    $('body,html').animate({ scrollTop : 0}, 1000); // Scroll to top of body
	});

	//initialize bxslider for Program Page
	$('.bxslider').bxSlider({
		pager:false
	});

	//Toggle Mobile menu to hide
	$('.mobile-nav .menu-menu-1-container').toggle();
	 //Toggle menu to display on click
	 $( ".menu-toggle" ).click(function() {
	 	$('.menu-open').toggle();
	   $( ".light-bar" ).toggle();
	   $( ".dark-bar" ).toggle();
	   $('.opacity').toggle();
	   $( ".menu-menu-1-container" ).toggle();
	 });


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



