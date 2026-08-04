<?php
/**
 * Enqueue Scripts & Styles
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load CSS & JavaScript
 */
function globepulse_enqueue_assets() {

	// Main Theme Style
	wp_enqueue_style(
		'globepulse-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Main CSS
	wp_enqueue_style(
		'globepulse-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'globepulse-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Responsive CSS
	wp_enqueue_style(
		'globepulse-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'globepulse-main' ),
		wp_get_theme()->get( 'Version' )
	);

	// Font Awesome
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
		array(),
		'6.7.2'
	);

	// Main JS
	wp_enqueue_script(
		'globepulse-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Dark Mode JS
	wp_enqueue_script(
		'globepulse-dark-mode',
		get_template_directory_uri() . '/assets/js/dark-mode.js',
		array( 'globepulse-main' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Threaded Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'globepulse_enqueue_assets' );
