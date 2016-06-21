<?php
/**
 * Template Name: Single Program
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="program-area">

			<p>NEED ARCHIVE PAGES WITH JAVASCRIPT</p>

		<main id="main" class="program-main" role="main">
			<div class="program-description"><?php echo CFS()->get( 'program_description' ); ?></div>

			<h2 class="section_header">What you learn</h2>

			<section class="learning-container">
			<?php
	 			$loop = CFS() -> get ('program_learnings');
	 			foreach ($loop as $row) :
			?>
				<div class="learning-images"><img src="<?php echo $row['learning_images'];?>"/>
	 			<p class="learning-object"><?php echo $row['learning_object']; ?></p>
				<p class="program-learning"><?php echo $row['program_learning']; ?></p>
			 </div>
			<?php endforeach; ?>
		</section> <!--# What you learn-->

		<h2 class="section_header">Program Dates</h2>
		<section class="dates-container">
			<div class="program-dates">
				<p class="program-month"><?php echo CFS()->get( 'program_month' ); ?></p>
				<p class="program-day"><?php echo CFS()->get( 'program_day' ); ?></p>
				<p class="program-year"><?php echo CFS()->get( 'program_year' ); ?></p>
			</div>
		</section>







		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
