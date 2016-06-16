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
				
				<!--
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</header>
		 
				<div class="writeup">
					<p>The Planet Protector Academy is an innovative digital-led classroom experience that teaches kids about important environmental issues and empowers them to lead change in their families. </p>
				</div>
				<section class="image-slider">
					
					
				</section>
				<section class="programs-container">
					<h2>zero heroes</h2>
					<div class="image-container image-one">
						<img src="<?php echo get_template_directory_uri()?>/images/garbage-bag.png" alt="Garbage Bag Icon">
					</div>
					<p>This is a description of the program. uo in maiorum facilisi definitionem. Mel tollit vivendo ex. Ne qui exerci doming. Per eu utroque apeirian  Impetus  </p>
					<h2>keep it cool</h2>
					<div class="image-container">
					<img src="<?php echo get_template_directory_uri()?>/images/ice-cube.png" alt="Ice Cube Icon">
					</div>
					<p>This is a description of the program. uo in maiorum facilisi definitionem. Mel tollit vivendo ex. Ne qui exerci doming. Per eu utroque apeirian  Impetus  </p>
					<h2>keep it cool</p>
				</section>
					<div class="cta-button">
						<a href="#">Get started now</a>
					</div>
				-->
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'program' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- programs-page-wrapper -->



<?php get_footer(); ?>
