<?php
/**
 * Template Name: Single Program
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="program-area">


		<main id="main" class="program-main" role="main">

      <div class="program-page-background">
			  <!-- <?php //if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'full' ); ?>
				<?php //endif; ?> -->
				<div class="program-page-title"><?php the_title(); ?></div>
			</div>

			<section class="program-description">
		 		<div class="program-description-title"><?php echo CFS()->get( 'program_description_title' ); ?></div>
				<div class="program-description-text"><?php echo CFS()->get( 'program_description' ); ?></div>
		  </section>

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
          <a class="applybutton" href="#">Apply</a>
				 </div>
				<?php endforeach; ?>
		</section>

			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'program_to_program_instructors',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :
			?>
			<h2 class="section_header">Your Instructors</h2>
			<div class="instructors">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				  <div class="instructors-inner-wrapper">
			  		<img src="<?php echo CFS()->get( 'instructor_photo' ); ?>"/>
				  	<p class="instructor-name"><?php the_title(); ?></p>
				  	<p class="about-instructor"><?php echo CFS()->get( 'about_instructor' ); ?></p>
					</div>
					<div class="amp">&amp;</div>
			<?php endwhile; ?>
		 </div>
			<?php
			// Prevent weirdness
			wp_reset_postdata();
			endif;
			?>

			<h2 class="section_header">Tuition</h2>
			<section class="tuition-container">
				<div class="single-tuition"><span>&dollar;</span><span class="tuition-amount"><?php echo CFS()->get( 'program_tuition' ); ?></span><span><?php echo CFS()->get( 'frequency' ); ?></span>
				<div><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div></div>
				<div class="select-buttons">
				<a class="request-button" href="#">Request Syllabus</a>
				<a class="apply-button" href="#">Apply</a>
			</div>
			<p class="program-tip"><?php echo CFS()->get( 'tip' ); ?></p>
		 </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
