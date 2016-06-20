(function($) {
	$('.menu-menu-1-container').toggle();
 $( ".menu-toggle" ).click(function() {
 	$('.menu-open').toggle();
   $( ".light-bar" ).toggle();
   $( ".dark-bar" ).toggle();
   $('.opacity').toggle();
   $( ".menu-menu-1-container" ).toggle();
 });
})( jQuery );