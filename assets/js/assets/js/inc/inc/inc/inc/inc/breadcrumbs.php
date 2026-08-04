<?php
/**
 * Breadcrumb Navigation
 *
 * @package GlobePulse_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'globepulse_breadcrumbs' ) ) :

function globepulse_breadcrumbs() {

	echo '<nav class="gp-breadcrumbs">';

	echo '<a href="' . esc_url( home_url('/') ) . '">Home</a>';

	if ( is_category() ) {

		echo ' &raquo; ';
		single_cat_title();

	} elseif ( is_single() ) {

		echo ' &raquo; ';
		the_category(', ');

		echo ' &raquo; ';
		the_title();

	} elseif ( is_page() ) {

		echo ' &raquo; ';
		the_title();

	} elseif ( is_tag() ) {

		echo ' &raquo; Tag: ';
		single_tag_title();

	} elseif ( is_author() ) {

		echo ' &raquo; Author: ';
		the_author();

	} elseif ( is_search() ) {

		echo ' &raquo; Search: ';
		echo esc_html( get_search_query() );

	} elseif ( is_404() ) {

		echo ' &raquo; 404';

	}

	echo '</nav>';

}

endif;
