<?php
/**
 * The template for displaying all pages.
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="about-page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="about-title">
					<h1>About Us</h1>
				</div>

				<section class="about-main">
					<div class="logo-container container">
						<img class="text-logo" src="<?php echo get_template_directory_uri()?>/images/logos/dreamrider-logo-text.jpg" alt="DreamRider Logo">
						<img class="logo-with-human" src="<?php echo get_template_directory_uri()?>/images/logos/dreamrider-logo-with-characters.jpg" alt="DreamRider Logo">
					</div>
					<div class="about-intro container">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; // End of the loop. ?>
					</div>
					<div class="about-quote">
						<div class="container">
							<p>
								<?php echo esc_html(CFS()->get('about_quote')) ?>
							</p>
							<p>
								<?php echo esc_html(CFS()->get('about_quote_source')) ?>
							</p>
						</div>
					</div>
				</section><!-- about-main -->

				<section class="about-story">
					<h3>The Dreamrider Story</h3>
					<img src="<?php echo get_template_directory_uri()?>/images/YVR.png" alt="YVR Icon">
					<p><?php echo esc_html(CFS()->get('about_story')) ?></p>
				</section><!-- about-story -->

				<section class="about-pictures">
					<div><img src="<?php echo CFS()->get('about_image_1') ?>"></div>
					<div><img src="<?php echo CFS()->get('about_image_2') ?>"></div>
				</section><!-- about-pictures -->

				<section class="about-today">
					<div class="container">
						<h3>Today</h3>
						<p><?php echo esc_html(CFS()->get('about_today')) ?></p>
					</div>
				</section><!-- about-today -->

				<section class="about-community container">
					<h3>2016 Community Partners</h3>

					<?php get_template_part('template-parts/community-partners') ?>
					<p>
						Help us to continue spreading the DreamRider magic by donating online through CanadaHelps.
					</p>
					<p>
						We are a Canadian registered charity #85480-1289-RR0001.
					</p>
					<div class="donate-button">
						<a href="#">Donate Now</a>
					</div>
				</section><!-- about-community -->



			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- about-page-wrapper -->


<?php get_footer(); ?>
