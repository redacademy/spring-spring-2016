<?php
/**
 * Template Name: Single Program
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="program-content">
			<?php the_content(); ?>
		</div>

		<h2 class="sections-header">What you learn</h2>


		<div class="program-learnings"><?php echo CFS()->get( 'program_learnings' ); ?></div>
		<h2 class="sections-header">Program Dates</h2>
		<div class="program-dates"><?php echo CFS()->get( 'program_dates' ); ?></div>
		<div class="program-info"><?php echo CFS()->get( 'program_info' ); ?></div>
		<h2 class="sections-header">Your Instructors</h2>
		<p>need to create another custom field called instructors and use plugin post2post to link!!!</p>
		<h2 class="sections-header">Tuition</h2>
		<div class="program-tuition"><?php echo CFS()->get( 'program_tuition' ); ?></div>
		<div class="program-onetime-tuition"><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
