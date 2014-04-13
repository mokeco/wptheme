<?php
add_theme_support( 'post-thumbnails');
// set_post_thumbnail_size( 300, 300, true );
/**
 * Enqueue scripts and styles.
 */
function aistearcompany_scripts() {
	// StyleSheet
/*
	wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.min.css' );
	wp_enqueue_style( 'genericon', get_template_directory_uri() . '/css/genericons.min.css' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.min.css' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.min.css' );
*/
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// jQuery & javascript
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '', true, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '', true, true );
}
add_action( 'wp_enqueue_scripts', 'aistearcompany_scripts' );

register_nav_menus(
	array(
		'MainMenu' => 'メインメニュー',
		'SubMenu' => 'サードバーメニュー',
		'FooterMenu' => 'フッターメニュー',
		)
	);

function AistearTemplate_Este_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'AistearTemplate_Este' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'AistearTemplate_Este_widgets_init' );
