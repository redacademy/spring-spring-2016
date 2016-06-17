<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="mobile_home_hero">
						<div class="inner_hero">
							<img class="spring_mobile_logo" src= "<?php echo get_template_directory_uri(); ?>/images/spring_logo.png" alt= "spring logo" />
							<div class="subtext_mobile">
								<p>A global startup school for Entrepreneurs</p>
							</div>
							<div class="mobile_cta">
								<a href="<?php echo get_site_url(); ?>/programs"<p> Find out more </p></a>
							</div>
							<div class="down_button">
								<i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i>
							</div>
						</div>		
				</div>

				<div class="desktop_home_hero">
					<div class="js-video [vimeo, widescreen] overlay">
					</div>
					<div class="video_text_overlay">
						<img class="home_hero_logo" src= "<?php echo get_template_directory_uri(); ?>/images/spring_logo_white.png" alt= "spring logo" />
						<h1 class="home_hero_h1">A Global Startup School for Entrepreneurs</h1>
						<i class="fa fa-play-circle-o fa-4x" aria-hidden="true"></i>

					</div>
				</div>
				
				<section>
					<h2 class="section_header">What we offer</h2>
				</section>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			
			<section>
				<h2 class="section_header">Where we are</h2>
				<div id='map' style='width: 100%; height: 500px;'></div>
					<script>
					mapboxgl.accessToken = 'pk.eyJ1IjoidG9tcm9wZXIiLCJhIjoiY2lwaW5wZHVtMDFyaHRjbWRjZmJ1M2c0ZSJ9.Gc778JgvVYrCjqLRAmrbww';
					  var map = new mapboxgl.Map({
					      container: 'map',
					      style: 'mapbox://styles/tomroper/cipio0ab7003gbam5i1tlh7w4'
					  });
						// disable map zoom when using scroll
						map.scrollZoom.disable();
					</script>
			</section>
			
			<section>
				<h2 class="section_header">Events</h2>
			</section>
			
			<section>
				<h2 class="section_header">Blog</h2>
			</section>

			<section>
				<h2 class="section_header">Stay updated</h2>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
