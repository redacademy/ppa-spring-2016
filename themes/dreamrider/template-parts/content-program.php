<?php
/**
 * Template part for displaying page content in archive-program.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h2><?php the_title(); ?></h2>
	
	<div class="image-container">
	<img src="<?php echo CFS()->get('program_image')?>">
	</div>

	<div class="writeup">
		<p><?php the_content(); ?></p>
	</div>

</article><!-- #post-## -->
