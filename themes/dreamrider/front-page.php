<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="hero-banner">
		
		</section>

		<section class="main-title">
			<h1>Inspiring environmental superheroes to lead change</h1>
			<p class="more-info">The Planet Protector Academy is an innovative digital-led classroom experience that teaches kids about important environmental issues and empowers them to lead change in their families.</p>
			<div class="btn">
				<p>Get started now</p>
			</div>
		</section><!-- main-title -->

		<section class="programs">
			<h1>programs</h1>
			<div class="program-one">
				<img src="" alt="">
				<h4>zero hero</h4>
				<p>Lorem ipsum dolor sit amet, eros consul ut has. Eum clita nostrud splendide ex, ius eu amet nonumes. Tempor abhorreant at eos, sed at tempor postea mollis.</p>
			</div><!-- program-one -->
			<div class="program-two">
				<img src="" alt="">
				<h4>keep cool</h4>
				<p>Lorem ipsum dolor sit amet, eros consul ut has. Eum clita nostrud splendide ex, ius eu amet nonumes. Tempor abhorreant at eos, sed at tempor postea mollis.</p>
			</div><!-- program-two -->

		</section><!-- programs -->
		<section class="learning-benefits">
			<div class="content-holder">
				<img src="" alt="">
				<h5>Easy to use and implement</h5>
			</div>
			<div class="learning-content-holder">
				<img src="" alt="">
				<h5>Engages and meets diverse learning needs</h5>
			</div>
			<div class="learning-content-holder">
				<img src="" alt="">
				<h5>Flexible and adaptable</h5>
			</div>
			<div class="learning-content-holder">
				<img src="" alt="">
				<h5>Supports curriculum</h5>
			</div>
			<div class="learning-content-holder">
				<img src="" alt="">
				<h5>Inspires real change beyond the classroom</h5>
			</div>
			<div class="learning-content-holder">
				<img src="" alt="">
				<h5>Helps bring tech into the classroom</h5>
			</div>		
		</section><!-- learning-benefits -->
		<section class="testimonials">
			<img src="" alt="">
			<h1>testimonials</h1>
			<div class="testimonial-container">
				<div class="testimonial">
					<div class="testimonial-bubble">
					</div>	
					<div class="testimonial-lower">
					<img src="" alt="">
					<p></p>
					</div>
				</div><!-- testimonial -->
				<div class="testimonial">
					<div class="testimonial-bubble">
					</div>	
					<div class="testimonial-lower">
					<img src="" alt="">
					<p></p>
					</div>
				</div><!-- testimonial -->
				<div class="testimonial">
					<div class="testimonial-bubble">
					</div>	
					<div class="testimonial-lower">
					<img src="" alt="">
					<p></p>
					</div>
				</div><!-- testimonial -->
			</div><!-- testimonial-container -->
			<div class="btn">
				<p>start my free trail</p>
			</div>
		</section><!-- testimonials -->
		<section class="community-impact">
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>tracks behavior change data</h5>
			</div>
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>increase awareness towards eco-friendly methods</h5>
			</div>
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>easy to scale</h5>
			</div>
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>encourages a positive attitude towards waste reduction</h5>
			</div>
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>cultivates creativity and innovation</h5>
			</div>
			<div class="community-content-holder">
				<img src="" alt="">
				<h5>raises awareness and influences positive changes</h5>
			</div>
			<div class="btn-inverted">
				<p>read case studies</p>
			</div>
		</section><!-- community-impact -->
		<section class="community-partners">
			<h1>featured community partners</h1>
			<div class="partners-images">
				<div class="partner-image">
					<img src="" alt="">
				</div>
				<div class="partner-image">
					<img src="" alt="">
				</div>
				<div class="partner-image">
					<img src="" alt="">
				</div>
				<div class="partner-image">
					<img src="" alt="">
				</div>
				<div class="partner-image">
					<img src="" alt="">
				</div>
				<div class="partner-image">
					<img src="" alt="">
				</div>
			</div><!-- partners-images -->
		</section><!-- community-partners -->
		<section class="quotes-section">
			<img src="" alt="">
			<div class="quotes-container">
				<div class="quotes">
					<p>Keep Cool! toured every one of Delta's 26 elementary schools. Almost 1,000 Delta children were inspired by the play to pledge to reduce their carbon footprint by more than 26,000 tonnes.</p>
					<p>Kim Houghton, Environmental Office, Corporation of Delta, BC</p>
				</div>
				<div class="quotes">
					<p>It's hard to believe how much DreamRider engages kids if you haven't seen it for yoursel. It's unlike anything I've ever seen.</p>
					<p>Amy Fournier, Sustainability, City of Vancouver, BC</p>

				</div>
				<div class="quotes">
					<p>DreamRider has a unique ablility to educate and inspire children on environmental issues through song and theatre... These productions really hit home!</p>
					<p>Madeleine Lemaire, City of Coquitlam, BC</p>
				</div>
			</div>
		<div class="btn">
				<p>request a demo</p>
			</div>
		</section><!-- quotes -->
		<section class="awards">
			<img src="" alt="">
			<h1>awards</h1>
			<p>Awesome Award, 2015</p>
			<p>Telus Innovation Award, 2014</p>
			<p>Earth Day Canada's Canadian</p>
			<p>Top Ten Hometown Hero, 2009</p>
		</section><!-- awards -->


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

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
