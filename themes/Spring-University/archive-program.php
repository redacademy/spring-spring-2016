<?php
/**
 * Template Name: Programs Template
 *
 * @package Spring_Theme
 */

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

           <?php while ( have_posts() ) : the_post(); ?>

           				<?php get_template_part( 'template-parts/content', 'single' ); ?>

           			<?php endwhile; // End of the loop. ?>
<?php echo 'hello!' ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
