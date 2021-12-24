<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Xtremexteriors
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function xtreme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'xtreme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function xtreme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
//add_action( 'wp_head', 'xtreme_pingback_header' );


// Our custom post type function
function create_post_type() {

	register_post_type( 'services',
		// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Services' )
			),
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'services'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_post_type' );
