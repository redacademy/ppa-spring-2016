(function($) {
	$('.mobile-nav .menu-menu-1-container').toggle();
 $( ".menu-toggle" ).click(function() {
 	$('.menu-open').toggle();
   $( ".light-bar" ).toggle();
   $( ".dark-bar" ).toggle();
   $('.opacity').toggle();
   $( ".mobile-nav .menu-menu-1-container" ).toggle();
 });
})( jQuery );