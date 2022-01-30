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
	wp_enqueue_style( 'tree_bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-grid.min.css', array(), wp_get_theme()->get( 'Version' ).''. + $cache);
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

