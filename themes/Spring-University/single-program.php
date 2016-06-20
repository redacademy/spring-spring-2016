<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>

		<div class="program-description"><?php echo CFS()->get( 'program_description' ); ?></div>
		<h2 class="section_header">What you learn</h2>
		<div class="program-syllabus"><?php echo CFS()->get( 'program_syllabus' ); ?></div>
		<h2 class="section_header">Progrm Dates</h2>
		<div class="program-dates"><?php echo CFS()->get( 'program_dates' ); ?></div>
		<div class="program-info"><?php echo CFS()->get( 'program_info' ); ?></div>
		<h2 class="section_header">Your Instructors</h2>
		<p>need to create another custom field called instructors and use plugin post2post to link!!!</p>
		<h2 class="section_header">Tuition</h2>
		<div class="program-tuition"><?php echo CFS()->get( 'program_tuition' ); ?></div>
		<div class="program-onetime-tuition"><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
