<?php

/**
 * Enqueue stylesheet from parent theme
 */
function child_enqueue__parent_scripts() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'jordans-odyssey', get_stylesheet_directory_uri() . '/style.css' );

	wp_enqueue_script( 'parent', get_template_directory_uri() . '/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts' );
