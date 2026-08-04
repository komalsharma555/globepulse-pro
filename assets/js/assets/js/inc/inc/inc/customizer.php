<?php
/**
 * Theme Customizer
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function globepulse_customize_register( $wp_customize ) {

	/*
	----------------------------------------
	Theme Options Panel
	----------------------------------------
	*/

	$wp_customize->add_panel(
		'globepulse_options',
		array(
			'title'    => __( 'GlobePulse Theme Options', 'globepulse-pro' ),
			'priority' => 20,
		)
	);

	/*
	----------------------------------------
	Header Section
	----------------------------------------
	*/

	$wp_customize->add_section(
		'gp_header',
		array(
			'title' => __( 'Header Settings', 'globepulse-pro' ),
			'panel' => 'globepulse_options',
		)
	);

	$wp_customize->add_setting(
		'gp_sticky_header',
		array(
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'gp_sticky_header',
		array(
			'label' => 'Enable Sticky Header',
			'type'  => 'checkbox',
			'section' => 'gp_header',
		)
	);

	/*
	----------------------------------------
	Breaking News
	----------------------------------------
	*/

	$wp_customize->add_section(
		'gp_breaking_news',
		array(
			'title' => __( 'Breaking News', 'globepulse-pro' ),
			'panel' => 'globepulse_options',
		)
	);

	$wp_customize->add_setting(
		'gp_breaking_enable',
		array(
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'gp_breaking_enable',
		array(
			'label'   => 'Enable Breaking News',
			'type'    => 'checkbox',
			'section' => 'gp_breaking_news',
		)
	);

	/*
	----------------------------------------
	Footer
	----------------------------------------
	*/

	$wp_customize->add_section(
		'gp_footer',
		array(
			'title' => __( 'Footer Settings', 'globepulse-pro' ),
			'panel' => 'globepulse_options',
		)
	);

	$wp_customize->add_setting(
		'gp_footer_text',
		array(
			'default' => '© GlobePulse. All Rights Reserved.',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'gp_footer_text',
		array(
			'label'   => 'Footer Copyright',
			'type'    => 'text',
			'section' => 'gp_footer',
		)
	);

	/*
	----------------------------------------
	Colors
	----------------------------------------
	*/

	$wp_customize->add_section(
		'gp_colors',
		array(
			'title' => __( 'Theme Colors', 'globepulse-pro' ),
			'panel' => 'globepulse_options',
		)
	);

	$wp_customize->add_setting(
		'gp_primary_color',
		array(
			'default' => '#0d6efd',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gp_primary_color',
			array(
				'label'   => 'Primary Color',
				'section' => 'gp_colors',
			)
		)
	);

}

add_action( 'customize_register', 'globepulse_customize_register' );
