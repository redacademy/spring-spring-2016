<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function spring_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'spring_starter_body_classes' );

// About Header CSS //
function spring_about_header_styles_method() {

	if ( !is_page( 'about' ) ) {
		return ;
	}

	$image = CFS()->get( 'header_image' );
  $custom_css = "
		.about-header {
			background: url(" . $image . ") no-repeat center;
			background-size: cover;
		}";

	wp_add_inline_style( 'red-starter-style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'spring_about_header_styles_method' );

// load bxslider
function loadbxslider()
{
    wp_enqueue_style('bxstyle', '/wp-content/themes/Spring-University/build/js/bxslider/jquery.bxslider.css');
    wp_enqueue_script('bxscript', '/wp-content/themes/Spring-University/build/js/bxslider/jquery.bxslider.min.js', array('jquery'));
		wp_enqueue_script('program_js_script', get_template_directory_uri() . '/build/js/programs.min.js');
}
add_action('wp_enqueue_scripts', 'loadbxslider');
