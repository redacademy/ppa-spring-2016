jQuery(document).ready(function($) {


	//Functionality: loader for banner image

	if($('.home').length > 0){
		$('<img src="../wp-content/themes/dreamrider/images/banner.gif">').load(function() {
		  $('.hero-banner').css({
		  	'background' : 'linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(' + $(this).attr('src') + ') no-repeat',
		  	'background-position': 'top center',
		  	'background-size' : '100%'
		  	});
		});
	}

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

	////////////////////////////////////////
	//// Animations Related Javascript  ////
	////////////////////////////////////////

	//Homepage - Animate Program section
	$('.individual-program').css('opacity', 0);
	 
	$('.individual-program').waypoint(function() {
      $('.individual-program').addClass('fadeInUp');
 	}, { offset: '70%' });

	//Homepage - Testimonial section
 	$('.individual-testimonial').css('opacity', 0);
	 
	$('.individual-testimonial').waypoint(function() {
      $('.individual-testimonial').addClass('fadeInUp');
 	}, { offset: '70%' });


 	//About us - Animate Logo section
	$('.logo-container').css('opacity', 0);
	 
	$('.logo-container').waypoint(function() {
      $('.logo-container').addClass('bounceIn');
 	}, { offset: '60%' });

 	//About us - Animate Logo section
	$('.about-pictures').css('opacity', 0);
	 
	$('.about-pictures').waypoint(function() {
      $('.about-pictures').addClass('fadeInUp');
 	}, { offset: '80%' });

	//Programs - Animate Slider section
	$('.archive .bxslider-container').css('opacity', 0);
	 
	$('.archive .bxslider-container').waypoint(function() {
      $('.archive .bxslider-container').addClass('fadeInUp');
 	}, { offset: '80%' });	

 	//Blog - Animate blog section
 	$('.blog .type-post').css('opacity', 0);
	 
	$('.blog .type-post').waypoint(function() {
      $('.blog .type-post').addClass('fadeInUp');
 	}, { offset: '80%' });

	//Contact - Animate Contact section
	$('.contact-header-section').css('opacity', 0);
	 
	$('.contact-header-section').waypoint(function() {
      $('.contact-header-section').addClass('fadeInUp');
      $('.contact-page-wrapper article').addClass('fadeInUp');
 	}, { offset: '80%' });	

});



