<?php
/**
 * The header for our theme.
 *
 * @package Spring_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"> Spring </h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
						<img class="home_img" src= "<?php echo get_template_directory_uri(); ?>/images/spring_mobile_white_logo.png" alt= "whiteLogo" />
					</h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<img class="hamburger" src="<?php echo get_template_directory_uri(); ?>/images/hamburger.png" alt= "hamburger" />
							<img class="x-mark" src="<?php echo get_template_directory_uri(); ?>/images/x-mark.png" alt= "x-mark" />
					</button>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<div id="content" class="site-content">
