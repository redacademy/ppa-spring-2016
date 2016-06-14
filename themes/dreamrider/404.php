<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="not-found-page-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="error-not-found">
					<header class="page-header">
						<h1 class="big-text">Uh Oh</h1>
						<h4 class="page-title">404 page not found</h4>
					</header><!-- .page-header -->

					<div class="page-content">
						<div class="not-found-picture">
						<img src="" alt="">
						</div>
						<div class="text">
							<h4>goober is working on it</h4>
						</div>
					</div><!-- .page-content -->
					<p class="looking-for">The page you were looking for can't be found. But we have solutions for you.</p>

					<div class="btn-container">
						<div class="btn return">
							<p>return home</p>
						</div>
						<div class="btn contact">
							<p>contact us</p>
						</div>
					</div>
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- 404-page-wrapper -->

<?php get_footer(); ?>
