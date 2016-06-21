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

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'blog' ); ?>

				<?php endwhile; ?>

				<div class="pagination">
					<?php echo paginate_links(
						array(
							'prev_text' => '< Prev',
							'next_text' =>'Next >'
						)
					); ?>						
				</div>

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