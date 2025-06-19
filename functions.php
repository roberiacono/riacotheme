<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package riacot
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function riacot_style() {
	wp_enqueue_style(
		'riacot_style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'riacot_style' );


if ( ! function_exists( 'riacot_setup' ) ) {
	function riacot_setup() {
            add_theme_support( 'wp-block-styles' );
        }
}
add_action( 'after_setup_theme', 'riacot_setup' );