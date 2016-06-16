<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="hero-banner" >
					<img src ="<?php echo CFS()->get('hero_image') ?>">
				</section>

				<section class="main-title">
					<h1><?php echo esc_html(CFS()->get('title')) ?></h1>
					<p class="more-info">The Planet Protector Academy is an innovative digital-led classroom experience that teaches kids about important environmental issues and empowers them to lead change in their families.</p>
				</section><!-- main-title -->
				<div class="cta-button">
					<a href="#">Get started now</a>
				</div>

				<section class="programs">
					<h2>Programs</h2>

					<?php
					   $args = array( 'post_type' => 'program', 
					   				  'order' => 'ASC',
					   				  'posts_per_page' => 3	 );
					   $programs_posts = get_posts( $args ); // returns an array of posts
					?>
					
					<?php foreach ( $programs_posts as $post ) : setup_postdata( $post ); ?>

						<div class="individual-program">
							<a href="#"><img src="<?php echo CFS()->get('program_image')?>" alt="Garbage Bag Icon"></a>
							<h4><?php echo get_the_title() ?></h4>
							<p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
						</div>

					<?php endforeach; wp_reset_postdata(); ?>


				</section><!-- programs -->

				<section class="learning-benefits">
					<h2>Learning Benefits</h2>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_1.png" alt="learning icon">
						<p>Easy to use and Implement</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_2.png" alt="learning icon">
						<p>Flexible and <br>Adaptable</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_3.png" alt="learning icon">
						<p>Supports<br>Curriculum</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_4.png" alt="learning icon">
						<p>Engages and Meets <br>Diverse Learning Needs</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_5.png" alt="learning icon">
						<p>Helps Bring Tech <br>Into the Classroom</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Learning_6.png" alt="learning icon">
						<p>Inspires Real Change <br>Beyond the Classroom</p>
					</div>
				</section><!-- learning-benefits -->

				<section class="testimonials">
					
					<!-- Custom Loop Defined for Testimonial -->
					<?php
					   $args = array( 'post_type' => 'testimonial', 
					   				  'order' => 'ASC',
					   				  'posts_per_page' => 3	 );
					   $testimonial_posts = get_posts( $args ); // returns an array of posts
					?>

					<img src="" alt="">
					<h2>Testimonials</h2>
					<div class="testimonial-container">
						
						<!-- Loop Starts -->
						<?php foreach ( $testimonial_posts as $post ) : setup_postdata( $post ); ?>

						<div class="individual-testimonial">
							<div class="testimonial-bubble">
								<p>"<?php echo wp_trim_words(get_the_content(), 36, '...'); ?>"</p>
							</div>
							<div class="testimonial-source">
								<div><img src="<?php echo get_template_directory_uri()?>/images/icons/Testimonial_1.png" alt="testimonial-icon"></div>
								<!-- Pulls the testimonial's name and title -->
								<div><p><?php echo CFS()->get('testimonial_name') ?>, <?php echo CFS()->get('testimonial_title') ?></p></div>
							</div>
						</div>
					
					<?php endforeach; wp_reset_postdata(); ?>

					</div>
					<!-- end testimonial-container -->
					<div class="free-trial-button">
						<a href="#">Start My Free Trial</a>
					</div>
				</section>
				<!-- end testimonials section-->

				<section class="community-impact">
					<h2>Community Impact</h2>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_1.png" alt="learning icon">
						<p>Tracks Behaviour <br>Change Data</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_2.png" alt="learning icon">
						<p>Raises Awareness and <br>Influencing Positive Change</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_3.png" alt="learning icon">
						<p>Encourages a Positive Attitude towards <br>Waste Reduction</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_4.png" alt="learning icon">
						<p>Increases Awareness towards <br>Eco-Friendly Methods</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_5.png" alt="learning icon">
						<p>Easy to Scale</p>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()?>/images/icons/Impact_6.png" alt="learning icon">
						<p>Cultivates Creativity <br>and Innovation</p>
					</div>
					<div class="btn-inverted">
						<a href="#">Read Case Studies</a>
					</div>
				</section><!-- community-impact -->

				<section class="community-partners-container">
				  <h2>Community Partners</h2>
				  <div class="partners-images">
				    <div class="partner-image">
				      <a href="http://www.brandon.ca" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/community-partners/brandon.png" alt="City of Brandon Logo"></a>
				    </div>
				    <div class="partner-image">
				      <a href="http://www.edmonton.ca" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/community-partners/edmonton.png" alt="City of Edmonton Logo"></a>
				    </div>
				    <div class="partner-image">
				      <a href="http://www.city.peterborough.on.ca" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/community-partners/peterborough.png" alt="City of Peterborough Logo"></a>
				    </div>
				    <div class="partner-image">
				      <a href="http://www.guelph.ca" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/community-partners/guelph.png" alt="City of Guelph Logo"></a>
				    </div>
				    <div class="partner-image">
				      <a href="http://www.vernon.ca" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/community-partners/vernon.png" alt=""></a>
				    </div>
				    <div class="partner-image">
				      <a href="http://www.westvancouver.ca" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/community-partners/west-vancouver.png" alt="West Vancouver School District Logo"></a>
				    </div>
				  </div>
				  <!--end partners-images-->
				  <div class="partners-testimonials">
				    <img class="quotation-mark" src="<?php echo get_template_directory_uri() ?>/images/quotation-mark.png" alt="Testimonials from Community Partners Icon">
				    <div class="quotes-container">
				      <div class="quotes">
				        <p>Keep Cool! toured every one of Delta's 26 elementary schools. Almost 1,000 Delta children were inspired by the play to pledge to reduce their carbon footprint by more than 26,000 tonnes.</p>
				        <p class="quote-source">Kim Houghton, Environmental Office, Corporation of Delta, BC</p>
				        <div class="quote-separator"></div>
				      </div>
				      <div class="quotes">
				        <p>It's hard to believe how much DreamRider engages kids if you haven't seen it for yourself. It's unlike anything I've ever seen.</p>
				        <p class="quote-source">Amy Fournier, Sustainability, City of Vancouver, BC</p>
				        <div class="quote-separator"></div>
				      </div>
				      <div class="quotes">
				        <p>DreamRider has a unique ablility to educate and inspire children on environmental issues through song and theatre... These productions really hit home!</p>
				        <p class="quote-source">Madeleine Lemaire, City of Coquitlam, BC</p>
				        <div class="quote-separator"></div>
				      </div>
				    </div>
				    <!--end quotes-container-->
				  </div>
				  <!--end partners-testimonials-->
				  <div class="request-demo-button">
				    <a href="#">Request a Demo</a>
				  </div>
				</section><!-- community-partners -->

				<section class="awards">
					<img src="<?php echo get_template_directory_uri() ?>//images/award.png" alt="Awards Icon">
					<h2>Awards</h2>
					<p>Awesome Award, 2015</p>
					<p>Telus Innovation Award, 2014</p>
					<p>Earth Day Canada's Canadian Top Ten Hometown Hero, 2009</p>
				</section><!-- awards -->


				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
