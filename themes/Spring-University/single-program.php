<?php
/**
 * Template Name: Single Program
 *
 * @package Spring_Theme
 */

get_header(); ?>

	<div id="primary" class="program-area">
		<main id="main" class="program-main" role="main">

			<div class="program-container">
					<?php
					$current_program_id = get_the_ID();

					$args = array( 'post_type' => 'program',
													'posts_per_page' => 4,
													'order' => 'ASC');
					$program_post = get_posts( $args );
					?>
					<ul class="bxslider">
						<?php
							foreach ( $program_post as $post ) : setup_postdata( $post );

								$program_block_id = $post->ID;
								$is_current = $current_program_id === $program_block_id;
						?>
						<li class="program-list">
							<div class="single-container<?php echo $is_current ? ' current-program' : ''; ?>">
								<?php if ( !$is_current ) : ?>
									<a class="programs-link" href="<?php echo esc_url( get_permalink() ); ?>">
								<?php endif; ?>
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="program-image"><img src="<?php echo CFS()->get( 'program_image' ); ?>"/></div>
										<?php the_title( sprintf( '<h2 class="program-title">', '</h2>' ) ); ?></div>
									<div class="program-keywords"><?php echo CFS()->get( 'program_keywords' ); ?></div>
									<div class="program-tuition"><sup class="dollar-sign">&dollar;</sup><span class="tuition-amount"><?php echo CFS()->get( 'program_tuition' ); ?></span><span class="frequency"><?php echo CFS()->get( 'frequency' ); ?></span></div>
									<div class="program-onetime-tuition"><?php echo CFS()->get( 'program_onetime_tuition' ); ?></div>
								<?php if ( !$is_current ) : ?>
									</a>
								<?php endif; ?>
							</div>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
			</div>

      <div class="program-page-background">
				<?php //if ( has_post_thumbnail() ) : ?>
					<div class="program-bkg-img"><?php the_post_thumbnail( 'full' ); ?></div>
				<?php //endif; ?>
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

		 <div="discount-container">
		 	<div="plus-container"></div>
			<div="balance-container"></div>
		 </div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
