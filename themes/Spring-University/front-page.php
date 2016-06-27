<?php
/**
 * The template for displaying the home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" >

				<div class="mobile_home_hero">
						<div class="inner_hero">
							<img class="spring_mobile_logo" src= "<?php echo get_template_directory_uri(); ?>/images/spring_logo.png" alt= "spring logo" />
							<div class="subtext_mobile">
								<p>A global startup school for Entrepreneurs</p>
							</div>
							<div class="mobile_cta">
								<a href="<?php echo get_site_url(); ?>/programs"><p>Find out more</p></a>
							</div>
							<div class="down_button">
								<i class="fa fa-chevron-circle-down fa-2x" aria-hidden="true"></i>
							</div>
						</div>		
				</div>

				<div class="desktop_home_hero">
					<div class="js-video [vimeo, widescreen] overlay">
						<iframe id="vimeo_player" src="https://player.vimeo.com/video/165338136?portrait=0&title=0&autoplay=1&byline=0&loop=1&api=1&player_id=vimeo_player" width="100%" height="75%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="video_text_overlay">
						<img class="home_hero_logo" src= "<?php echo get_template_directory_uri(); ?>/images/spring_logo_white.png" alt= "spring logo" />
						<h1 class="home_hero_h1">A Global Startup School for Entrepreneurs</h1>
						<a href="#"><i class="fa fa-volume-up fa-4x" aria-hidden="true"></i></a>
					</div>
					<div class="video_controls_overlay">
					<i class="fa fa-volume-off fa-4x" aria-hidden="true"></i>
					<i class="fa fa-volume-up fa-4x" aria-hidden="true"></i>
					</div>
				</div>
								
				<h2 class="section_header offer_header">What we offer</h2>
				<section class="what_we_offer_section">
					<p class="offer_text"><?php echo CFS()->get( 'what_we_offer' ); ?></p>
					<div class="program_blocks">
										<?php
									 	$args = array( 'post_type' => 'program', 'posts_per_page' => 4 );
									 	$program_post = get_posts( $args );
										?>
										<?php foreach ( $program_post as $post ) : setup_postdata( $post ); ?>
										<div class="home_program_box">
										<img class="home_program_img" src="<?php echo CFS()->get( 'program_image' ); ?>" alt="program_image">
										<div class="home_program_text">
											<h3 class="home_program_title"><?php the_title(); ?></h3>
											<p>	<?php echo CFS()->get( 'program_keywords' ); ?> </p>
										</div>
								 </div>
								<?php endforeach; wp_reset_postdata(); ?>
						</div>
						<div class="home_cta program_cta">
							<a href="<?php echo get_site_url(); ?>/programs">Discover our programs</a>
						</div>		
				</section>
			
				<section class="map_section">
					<h2 class="section_header">Where we are</h2>
					<div id='map'	></div>
						<script>
						mapboxgl.accessToken = 'pk.eyJ1IjoidG9tcm9wZXIiLCJhIjoiY2lwaW5wZHVtMDFyaHRjbWRjZmJ1M2c0ZSJ9.Gc778JgvVYrCjqLRAmrbww';
						  var map = new mapboxgl.Map({
						      container: 'map',
						      style: 'mapbox://styles/tomroper/cipio0ab7003gbam5i1tlh7w4'
						  });
							map.scrollZoom.disable();
						</script>
						<div class="map_overlay">
							<div class="map_overlay_text">
								<?php echo CFS()->get( 'locations_text' ); ?>
							</div>
							<div class="home_cta location_cta">
								<a href="<?php echo get_site_url(); ?>/locations">Our Locations</a>
							</div>
						</div>
				</section>
			
				<h2 class="section_header">Events</h2>
				<section class="home_events">
				<div class="home_cta events_cta">
					<p><?php echo CFS()->get( 'events' ); ?></p>
					<a href="<?php echo get_site_url(); ?>/events">See our Events</a>
				</div>	
				</section>
				
				<h2 class="section_header">Blog</h2>
				<section class="home_blog">
						<div class="home_blog_content">
							<?php
								$args = array( 'numberposts' => '1' );
								$recent_posts = wp_get_recent_posts( $args );
								?>
							<?php	foreach( $recent_posts as $recent ): ?>
									  <h3><?php echo $recent["post_title"]?></h3>
									  <p><?php echo date( 'l F jS', strtotime( $recent['post_date'] ) ) ?></p>							
							<?php endforeach; wp_reset_postdata(); ?>
							<div class="home_cta blog_cta">
								<a href="<?php echo get_site_url(); ?>/blog">View Blog</a>
							</div>		
						</div>
				</section>

			 <h2 class="section_header">Stay updated</h2>
			<section class="home_updated">
				<h3 class="h3_updated">Receive relevant news and business tips to become a better entrepreneur</h3>
				<p><?php echo CFS()->get( 'sign_up' ); ?></p>
			</section> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
