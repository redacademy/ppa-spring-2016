<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<header class="entry-header">
		<img src ="<?php echo CFS()->get('post_image') ?>">
		<p class="caption"><?php echo CFS()->get('post_image_caption') ?></p>

	</header><!-- .entry-header -->

	<div class="entry-content">	
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
