<?php

// custom resblogsive theme features
function resblogsive_theme_features() {

	// remove generator-tag from <head>
	remove_action('wp_head', 'wp_generator');

	// add automatic feed links to <head>
	add_theme_support( 'automatic-feed-links' );

	// add support for featured images
	add_theme_support( 'post-thumbnails' );

	// add some style to the backend editor
	add_editor_style( 'css/editor-style.css' );

	// custom header images
	$header_args = array(
		'default-image'			=> '%s/images/headers/blurry.jpg',
		'width'					=> 1600,
		'height'				=> 400,
		'flex-width'			=> true,
		'flex-height'			=> true,
		'random-default'		=> false,
		'header-text'			=> true,
		'default-text-color'	=> '#ffffff',
		'uploads'				=> true,
	);
	add_theme_support( 'custom-header', $header_args );

	// register navigation menu
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'resblogsive' ),
	));

}

// hook into 'after_setup_theme' action
add_action( 'after_setup_theme', 'resblogsive_theme_features' );

// enqueue scripts and styles.
function resblogsive_scripts() {
	wp_enqueue_style( 'resblogsive-style', get_stylesheet_uri() );
	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700|Source+Code+Pro|Bitter:700' );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'resblogsive-js', get_template_directory_uri() . '/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'resblogsive_scripts' );
