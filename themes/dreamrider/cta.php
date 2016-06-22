<?php
/**
 * The template for displaying all pages.
 *  			Template Name: cta
 * @package RED_Starter_Theme
 */

get_header(); ?>
	
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<div class="cta-container">
			<a href="">
			<div class="cta-link">
				<img src="<?php echo get_template_directory_uri() ?>/images/monitor-icon.png" alt="Monitor Icon">
				<h3>Start my free trial</h3>
				<p>get a feel for the product for my classroom</p>
			</div>
			</a>
			<a href="">
			<div class="cta-link">
				<img src="<?php echo get_template_directory_uri() ?>/images/person-icon.png" alt="Person Icon">
				<h3>Request a demo</h3>
				<p>Get the full experience for my district or municipality</p>
			</div>
			</a>
			</div><!-- cta-container -->


			</main><!-- #main -->
		</div><!-- #primary -->
	

<?php get_footer(); ?>
