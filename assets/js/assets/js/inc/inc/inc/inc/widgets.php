<?php
/**
 * Theme Widgets
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Widget Areas
 */
function globepulse_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'globepulse-pro' ),
			'id'            => 'main-sidebar',
			'description'   => __( 'Main Sidebar Widgets', 'globepulse-pro' ),
			'before_widget' => '<section class="gp-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="gp-widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 1', 'globepulse-pro' ),
			'id'            => 'footer-1',
			'before_widget' => '<section class="gp-footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 2', 'globepulse-pro' ),
			'id'            => 'footer-2',
			'before_widget' => '<section class="gp-footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 3', 'globepulse-pro' ),
			'id'            => 'footer-3',
			'before_widget' => '<section class="gp-footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

}

add_action( 'widgets_init', 'globepulse_widgets_init' );
