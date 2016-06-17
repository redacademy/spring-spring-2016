<?php
/**
 * Template Name: Programs Template
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<header class="page-header">
					<h2>what we offer</h2>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content' );
						?>
           <?php echo CFS()->get( 'program_tuition' ); ?>
					<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
