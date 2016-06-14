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
						<p>Back to top</p>
						<a href="/about"><p>About Us</p></a>
						<a href="/programs"><p>Programs</p></a>
						<a href="/blog"><p>Blog</p></a>
						<a href="/contact"><p>Contact</p></a>
					</div><!-- footer-nav -->
					<div class="site-info">
						<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->
				</div><!-- footer-container -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
