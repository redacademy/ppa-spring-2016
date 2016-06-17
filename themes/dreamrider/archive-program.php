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
					<h2>Programs</h2>
				</header>
				<?php query_posts($query_string . "&order=ASC"); ?>

				<ul class="bxslider"><!-- List for bxslider  -->
					
					<?php while ( have_posts() ) : the_post(); ?>
						<li><?php get_template_part( 'template-parts/content', 'program' ); ?></li>
					<?php endwhile; // End of the loop. ?>

				</ul>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- programs-page-wrapper -->



<?php get_footer(); ?>
