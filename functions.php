<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package riacotheme
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function riacotheme_style() {
	wp_enqueue_style(
		'riacotheme_style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'riacotheme_style' );

if ( ! function_exists( 'riacotheme_setup' ) ) {
	function riacotheme_setup() {
            add_theme_support( 'wp-block-styles' );
        }
}
add_action( 'after_setup_theme', 'riacotheme_setup' );