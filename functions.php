<?php
/**
 * Demeter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Demeter
 * @since Demeter 1.0.0
 */

if ( ! function_exists( 'demeter_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Demeter 1.0
	 *
	 * @return void
	 */
	function demeter_styles() {
		// Register theme stylesheet.
		wp_register_style(
			'demeter-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'demeter-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'demeter_styles' );
