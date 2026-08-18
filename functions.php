<?php
/**
 * Pevin Dewnuka Portfolio theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function pevin_dewnuka_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'pevin_dewnuka_setup' );

function pevin_dewnuka_assets() {
	wp_enqueue_style(
		'pevin-dewnuka-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'pevin-dewnuka-style',
		get_stylesheet_uri(),
		array( 'pevin-dewnuka-fonts' ),
		'1.0.0'
	);

	wp_enqueue_script(
		'pevin-dewnuka-script',
		get_template_directory_uri() . '/assets/script.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'pevin_dewnuka_assets' );
