<?php
/**
 * Functions and definitions
 *
 *
 *
 * @package WordPress
 *
 */

function enqueue_styles() {
	$cache = microtime( true );
	wp_enqueue_style( 'tree_bootstrap', get_template_directory_uri() . '/libs/bootstrap-5.0.1/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ).''. + $cache);
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

