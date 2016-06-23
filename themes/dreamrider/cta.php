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
			
			<div class="cta-link trial">
				<a href="">
					<div class="cta-link-inside trial">
						<img src="<?php echo get_template_directory_uri() ?>/images/monitor-icon.png" alt="Monitor Icon">
						<h3>Start my free trial</h3>
					</div>
					<p>Get a feel for the product for my classroom</p>
				</a>
			</div>
			
			<div class="cta-link demo">
				<a href="">
				<div class="cta-link-inside demo">
					<img src="<?php echo get_template_directory_uri() ?>/images/person-icon.png" alt="Person Icon">
					<h3>Request a demo</h3>
				</div>
				<p>Get the full experience for my district or municipality</p>
				</a>
			</div>
			
			</div><!-- cta-container -->


			</main><!-- #main -->
		</div><!-- #primary -->
	

<?php get_footer(); ?>
