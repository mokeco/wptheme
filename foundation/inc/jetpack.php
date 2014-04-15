<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package AistearTemplate1
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function AistearTemplate1_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'AistearTemplate1_jetpack_setup' );
