<?php
/**
 * Template Name: Archive Programs
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<h2 class="program-offer">what we offer</h2>

<div class="program-container">
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
             <div class="single-container">
							 <a class="programs-link" href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="program-image"><img src="<?php echo CFS()->get( 'program_image' ); ?>"/></div>
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_title( sprintf( '<h2 class="program-title">', '</h2>' ) ); ?>
							</div><!-- #post-## -->
							<?php the_excerpt(); ?>

              <div class="program-keywords"><?php echo CFS()->get( 'program_keywords' ); ?></div>
						  <div class="program-tuition"><span>$</span><span class="tuition-amount"><?php echo CFS()->get( 'program_tuition' ); ?></span></div>
							<div class="program-onetime-tuition"><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>
						</a>
					</div>
					<?php endwhile; ?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
