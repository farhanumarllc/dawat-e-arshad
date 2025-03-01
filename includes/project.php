<?php
/**
 * Extra functions for the project
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */


/**
 * Custom CSS Styling for Admin Page
 *
 * This function adds some new css styles to admin page.
 */
function dawat_custom_admin_css() {
	echo '
	<style>

  	</style>
	';
}

add_action( 'admin_head', 'dawat_custom_admin_css' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function dawat_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dawat_theme_content_width', 900 );
}

add_action( 'after_setup_theme', 'dawat_theme_content_width', 0 );
