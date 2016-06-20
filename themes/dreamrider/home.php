<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div class="blog-page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<section class="blog-header-section">
				<h1>blog</h1>
			</section><!-- blog-header-section -->

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			<div class="cta-button">
				<a href="#">Get started now</a>
			</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- blog-page-wrapper -->


<?php get_footer(); ?>