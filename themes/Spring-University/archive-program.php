<?php
/**
 * Template Name: Programs Template
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<header>
					<h2 class="section_header">what we offer</h2>
				</header><!-- .page-header -->

<div class="program-container">
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
             <div class="single-container">
							 <a href="<?php echo esc_url( get_permalink() ); ?>">

							<div class="program-image"><img src="<?php echo CFS()->get( 'program_image' ); ?>"/></div>

							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_title( sprintf( '<h2 class="program-title">', '</h2>' ) ); ?>
							</div><!-- #post-## -->

							<?php the_excerpt(); ?>

						  <div class="program-tuition"><p><?php echo CFS()->get( 'program_tuition' ); ?></p>
							<span><?php echo CFS()->get( 'program_onetime_tuition' ); ?></span></div>

						</a>
					</div>
					<?php endwhile; ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
