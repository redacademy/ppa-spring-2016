<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="opacity">
		</div>
		<button class="menu-toggle menu-open" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
			<i class="fa fa-bars light-bar fa-2x" aria-hidden="true"></i>
		</button>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a> 

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<img class="desktop-logo" src="<?php echo get_template_directory_uri() ?>/images/Logo-for-print-use.png" alt="Planet Protector Acadmey Logo">
					<img class="mobile-logo" src="<?php echo get_template_directory_uri() ?>/images/Logo.png" alt="Planet Protector Acadmey Logo">
				</div><!-- .site-branding -->
				
				<div class="desktop-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div><!-- desktop-nav -->
							
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
						<i class="fa fa-bars dark-bar fa-2x" aria-hidden="true"></i>
					</button>
					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			
			<!-- Mobile Menu location -->
			<div class="mobile-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
			
			<div id="content" class="site-content">
