<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<p><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></p>
		<p><img class="checkmark-green" src="<?php echo get_template_directory_uri() ?>/images/checkmark-brandcolor.png" alt=""></p>
		<?php the_content(); ?>
		<div class="done">
			<a href="/">Done</a>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
