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
				<div class="program-info">
				<?php
					$infos = CFS() -> get ('program_info');
					foreach ($infos as $info) :
				?>
					<p><?php echo $info['program_hours']; ?></p>
					<p><?php echo $info['program_sessions']; ?></p>
					<p><?php echo $info['program_days_and_times']; ?></p>
				 </div>
				<?php endforeach; ?>
				<a class="apply-button" href="#">Apply</a>
			 </div>
		</section><!--# Program Dates-->

			<h2 class="section_header">Your Instructors</h2>
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'posts_to_posts',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :
			?>
			<h3>Related posts:</h3>
			<ul>
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
			    <p><?php echo CFS()->get( 'instructor_title' ); ?></p>
			<?php endwhile; ?>
			</ul>

			<?php
			// Prevent weirdness
			wp_reset_postdata();

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
