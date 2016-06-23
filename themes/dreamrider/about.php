<?php
/**
 * The template for displaying all pages.
 *  			Template Name: About
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
					<p class="about-intro container">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; // End of the loop. ?>
					</p>
					<div class="about-quote">
						<div class="container">
							<p>
								"DreamRider's work to engage with young people throughout the region is critical to raising environmental literacy throughout our communities - we simply love that they do it in such a fun and creative way."
							</p>
							<p class="quote-source">
								Christianne Wilhemson, <br>Executive Director, <br>Georgia Straight Alliance
							</p>
						</div>
					</div>
				</section><!-- about-main -->
				<section class="about-story">
					<h3>The Dreamrider Story</h3>
					<img src="<?php echo get_template_directory_uri()?>/images/YVR.png" alt="YVR Icon">
					<p>We started as a project of the City of Vancouver in 1997, engaging elementary school kids in water conservation through theatre. Word spread, and pretty soon we were working with municipalities to reach schools, teachers, and kids throughout the Metro Vancouver Region. Due to popular demand we became our own independent non-profit Dream Rider Theatre Society in 2002, before becoming a registered charity in 2005.</p>
					<p>Following the succes of our award-winning live theatre shows, we wanted to scale our reach and impact beyond Metro Vancouver to inspire a whole generation of environmental superheroes. The result is the Planet Protector Academy, a unique digital-led class-room based program in which kids become 'apprentice' Planet Protectors' and go home on superhero missions to change their families' behaviours!</p>
				</section><!-- about-story -->
				<section class="about-pictures">
					<div><img src="<?php echo get_template_directory_uri()?>/images/classroom-game-pics.jpg"></div>
					<div><img src="<?php echo get_template_directory_uri()?>/images/goober-esmeralda.jpg"></div>
				</section><!-- about-pictures -->
				<section class="about-today">
					<div class="container">
						<h3>Today</h3>
						<p>We work with municipal governments, school districts, foundations and companies to reach more than 50,000 K-7 students each year - at no cost to 95% of schools! Read more about our Partners and Supporters!</p>
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
