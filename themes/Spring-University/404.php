<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title">error</h2>
				</header><!-- .page-header -->

				<div class="page-content">

					<p>Something failed to load properly.</p>
					<p>"...It is better to be a failure at something you love than to be a success at something you hate."<span>-George Burns</span></p>

					<a href="<?php echo get_option('home'); ?>"/><button>Go back home</a></button>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
