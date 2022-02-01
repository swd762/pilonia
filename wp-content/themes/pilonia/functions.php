<?php
/**
 * Functions and definitions
 *
 *
 *
 * @package WordPress
 *
 */
add_filter( 'show_admin_bar', '__return_false' );

function enqueue_styles() {
	$cache = microtime( true );
	wp_enqueue_style( 'tree_bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-grid.min.css', array(), wp_get_theme()->get( 'Version' ).''. + $cache);
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script('tree_app',get_template_directory_uri() . '/js/app.js', array('jquery'));
	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

register_nav_menus(
	array(
		'top-menu' => __( 'Top', 'pilonia' ),
//		'categories-menu' => __( 'home-categories', 'rsht' ),
//		'footer-direction' => __( 'footer-direction', 'rsht' ),
//		'footer-school' => __( 'footer-school', 'rsht' ),
//		'footer-companies' => __( 'footer-companies', 'rsht' ),
//		'footer-about' => __( 'footer-about', 'rsht' ),
//		'sveden-page' => __( 'sveden-page', 'rsht' ),
	)
);

