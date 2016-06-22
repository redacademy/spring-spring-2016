<?php
/**
 * Template Name: Single Program
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="program-area">

		// get_posts loop of programs

		<?php
			$program_id = get_the_ID();

			$args = array();
			$programs = get_posts( $args );

			foreach ($programs as $program) {

				// if ( current program id equal id of program being looped over ) {

			}
			}
		 ?>

   <p>NEED ARCHIVE PAGES WITH JAVASCRIPT</p>
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
								  <div class="program-tuition"><span>$</span><span class="tuition-amount"><?php echo CFS()->get( 'program_tuition' ); ?></span><span class="frequency"><?php echo CFS()->get( 'frequency' ); ?></span></div>
									<div class="program-onetime-tuition"><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>
								</a>
							</div>
							<?php endwhile; ?>
		</div>
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
          <a class="apply-button" href="#">Apply</a>
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
			<?php endwhile; ?>
		 </div>
			<?php
			// Prevent weirdness
			wp_reset_postdata();
			endif;
			?>
			<h2 class="section_header">Tuition</h2>
			<section class="tuition-container">
				<div><span>$</span><span><?php echo CFS()->get( 'program_tuition' ); ?></span><span><?php echo CFS()->get( 'frequency' ); ?></span></div>
				<div><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>
		 </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
