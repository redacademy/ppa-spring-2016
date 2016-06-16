<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


//////////////////////////
/* Login Page Functions */
//////////////////////////

//Add a stylesheet login page
function dreamrider_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/build/css/customlogin.css" />';
}
add_action('login_head', 'dreamrider_custom_login');


//Links the logo to the homepage
function dreamrider_login_logo( $url ) {
    return get_template_directory_uri();
}
add_filter( 'login_headerurl', 'dreamrider_login_logo' );


//Changes the "login message"
function dreamrider_login_title(){
    return 'Return to home page';
}

add_filter( 'login_headertitle', 'dreamrider_login_title');

//////////////////////////
/* WP Page Functions    */
//////////////////////////

//Custom Function added to dreamrider
function dreamrider_enqueued_scripts() {
       	
       	//adds custom javascript for search function
		wp_enqueue_script( 'my_custom_js_script', get_template_directory_uri() . '/js/script.js');

}
add_action( 'wp_enqueue_scripts', 'dreamrider_enqueued_scripts' );


