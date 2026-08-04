<?php
/**
 * Theme Setup
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'globepulse_theme_setup' ) ) :

function globepulse_theme_setup() {

	// Translation Ready
	load_theme_textdomain(
		'globepulse-pro',
		get_template_directory() . '/languages'
	);

	// RSS Feed
	add_theme_support( 'automatic-feed-links' );

	// Title Tag
	add_theme_support( 'title-tag' );

	// Featured Images
	add_theme_support( 'post-thumbnails' );

	// Custom Logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// HTML5
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Custom Background
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Custom Header
	add_theme_support(
		'custom-header',
		array(
			'width'  => 1920,
			'height' => 300,
			'flex-height' => true,
		)
	);

	// Responsive Embeds
	add_theme_support( 'responsive-embeds' );

	// Wide Alignment
	add_theme_support( 'align-wide' );

	// Editor Styles
	add_theme_support( 'editor-styles' );

	add_editor_style( 'style.css' );

	// Menus
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'globepulse-pro' ),
			'top'     => __( 'Top Menu', 'globepulse-pro' ),
			'footer'  => __( 'Footer Menu', 'globepulse-pro' ),
		)
	);

	// WooCommerce Ready
	add_theme_support( 'woocommerce' );

}

endif;

add_action( 'after_setup_theme', 'globepulse_theme_setup' );
