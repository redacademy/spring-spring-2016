<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="mobile_home_hero">
						<div class="inner_hero">
							<img class="spring_mobile_logo" src= "<?php echo get_template_directory_uri(); ?>/images/spring_logo.png" alt= "spring logo" />
							<div class="subtext_mobile">
								<p>A global startup school for Entrepreneurs</p>
							</div>
							<div class="mobile_cta">
								<p> Find out more </p>
							</div>
							<div class="down_button">
								<i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i>
							</div>
						</div>		
				</div>

				<div class="desktop_home_hero">
					<div class="js-video [vimeo, widescreen] overlay">
					</div>
				</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
