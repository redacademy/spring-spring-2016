<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

		
			<h2 class="page_section_header"><?php echo wp_title($sep = '');?></h2>
			
			<div id='map'	></div>
				<script>
				mapboxgl.accessToken = 'pk.eyJ1IjoidG9tcm9wZXIiLCJhIjoiY2lwaW5wZHVtMDFyaHRjbWRjZmJ1M2c0ZSJ9.Gc778JgvVYrCjqLRAmrbww';
					var map = new mapboxgl.Map({
							container: 'map',
							style: 'mapbox://styles/tomroper/cipio0ab7003gbam5i1tlh7w4'
					});
					map.scrollZoom.disable();
				</script>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
