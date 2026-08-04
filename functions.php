<?php
/**
 * GlobePulse Pro Functions
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function globepulse_theme_setup() {

	// Theme Supports
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style'
	) );

	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );

	// Navigation Menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'globepulse-pro' ),
		'top'     => __( 'Top Menu', 'globepulse-pro' ),
		'footer'  => __( 'Footer Menu', 'globepulse-pro' ),
	) );

}
add_action( 'after_setup_theme', 'globepulse_theme_setup' );

/**
 * Load CSS & JS
 */
function globepulse_enqueue_assets() {

	wp_enqueue_style(
		'globepulse-style',
		get_stylesheet_uri(),
		array(),
		'1.0.0'
	);

	wp_enqueue_script(
		'globepulse-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.0.0',
		true
	);

}
add_action( 'wp_enqueue_scripts', 'globepulse_enqueue_assets' );

/**
 * Sidebar
 */
function globepulse_widgets() {

	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'description'   => 'Main Sidebar Widgets',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'globepulse_widgets' );
