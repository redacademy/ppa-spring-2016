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
				<div class="programs-container">
					<h1>programs</h1>
				</div>
				<div class="programs-writeup">
					<p>The Planet Protector Academy is an innovative digital-led classroom experience that teaches kids about important environmental issues and empowers them to lead change in their families. </p>
				</div>
				<section class="programs-image-slider">
					<div class="programs-image-container">
						<img src="" alt="">
					</div>
				</section><!-- programs-image-slider -->
				<section class="programs-heroes">
					<h2>heroes</h2>
					<p>Lorem ipsum dolor sit amet, id cetero iriure impetus eam, quo in maiorum facilisi definitionem. Mel tollit vivendo ex. Ne qui exerci doming. Per eu utroque apeirian scriptorem, no consul primis quo, et eos case tation ornatus. Ad iusto choro periculis nec, id cum tota definiebas efficiantur.Tota movet sapientem id mea, duo vivendo docendi constituto cu, nibh dicit incorrupte eam ea. Ut dolor option concludaturque vim, at mea partem concludaturque. Impetus alterum invenire id nam, id illum populo regione vim. Eum facilis efficiantur an, oportere conceptam temporibus no usu.</p>
				</section><!-- programs-heroes -->
				


					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- programs-page-wrapper -->



<?php get_footer(); ?>
