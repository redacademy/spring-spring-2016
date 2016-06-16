<?php
/**
 * Template Name: 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spring_Theme
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="error-header">
					<h2 class="error-title">error</h2>
				</header><!-- .page-header -->

				<div class="error-content">

					<p>Something failed to load properly.</p>
					<p>"...It is better to be a failure at something you love than to be a success at something you hate."<br/><span>-George Burns</span></p>

					<div class="button-container">
						<a class="go-home-button" href="<?php echo get_option('home'); ?>"/>Go back home</a>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
