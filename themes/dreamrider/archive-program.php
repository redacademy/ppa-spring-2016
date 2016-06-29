<?php
/**
 * The template for displaying all pages.
 *			Template Name: Programs
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="programs-page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
				<header class="entry-header">
					<h2><?php echo get_the_archive_title()?></h2>
				</header>
				
				<div class="bxslider-container animated">
					<!-- List for bxslider  -->
					<ul class="bxslider">
						<!-- loop and create li items -->
						<?php while ( have_posts() ) : the_post(); ?>
							<li><?php get_template_part( 'template-parts/content', 'program' ); ?></li>
						<?php endwhile; // End of the loop. ?>
					</ul>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- programs-page-wrapper -->



<?php get_footer(); ?>
