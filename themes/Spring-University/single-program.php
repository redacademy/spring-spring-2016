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

			<div class="learning-container">
			<?php
	 			$loop = CFS() -> get ('program_learnings');
	 			foreach ($loop as $row) :
			?>
				<div class="learning-images"><img src="<?php echo $row['learning_images'];?>"/>
	 			<p class="learning-object"><?php echo $row['learning_object']; ?></p>
				<p class="program-learning"><?php echo $row['program_learning']; ?></p>
			 </div>
			<?php endforeach; ?>
		</div> <!--# What you learn-->




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
