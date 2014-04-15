<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package AistearTemplate1
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function AistearTemplate1_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'AistearTemplate1_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function AistearTemplate1_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() )
		$classes[] = 'group-blog';

	return $classes;
}
add_filter( 'body_class', 'AistearTemplate1_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function AistearTemplate1_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'AistearTemplate1' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'AistearTemplate1_wp_title', 10, 2 );

/*
 * pre_get_posts
 */
/*
function HomeSlideshow( $query ) {
	if( $query->is_home() ) :
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', '4' );
	endif;
}
add_action( 'pre_get_posts', 'HomeSlideshow' );
*/
/*
function HomeInfomation( $query ) {
	if( $query->is_home() && $query->is_main_query() ) :
		$query->set( 'cat', '1' );
		$query->set( 'posts_per_page', '4' );
		$query->set( 'order', 'DESC' );
	endif;
}
add_action( 'pre_get_posts', 'HomeInfomation' );
*/

/*
 * excerpt
 */
function new_excerpt_more( $post ) {
	$excerpt_more  = ' …';
	$excerpt_more .= '<div class="text-right"><a href="' . get_permalink($post->ID) . '" class="btn btn-small btn-danger">続きを読む</a></div>';
	return $excerpt_more;
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function new_excerpt_length( $length ) {
     return 50;
}
add_filter( 'excerpt_mblength', 'new_excerpt_length' );

/*
 *
 */
add_image_size( 'banner', 226, 100, true );