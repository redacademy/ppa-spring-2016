<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-nav">

						<!-- Back to Top Button -->
						<div class="back-to-top">
							<img src="<?php echo get_template_directory_uri()?>/images/top-arrow.png" alt="Back to Top Icon">
							<p>Back To Top</p>
						</div>

						<!-- Footer Menu -->
						<?php echo wp_nav_menu( array(
						    'menu' => 'Footer Menu',
							'menu_class' => 'footer-menu'
						)); ?>

					</div><!-- footer-nav -->
				</div><!-- footer-container -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
