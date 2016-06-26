<?php
/**
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="contact-page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main contact-main" role="main">

				<section class="contact-header-section">
					<img class="mobile-logo" src="<?php echo get_template_directory_uri() ?>/images/logos/ppa-logo-stand-alone.png" alt="Planet Protector Acadmey Logo">
					<h3>Interested in knowing more?</h3>
					<p class="middle">Get in touch with us at <span class="tel">604-939-0364</span></p>
					<p>or send us a message below.</p>
				</section>

				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- contact-page-wrapper -->


<?php get_footer(); ?>
