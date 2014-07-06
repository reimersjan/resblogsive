<?php

// custom resblogsive theme features
function resblogsive_theme_features() {

	// remove generator-tag from <head>
	// remove_action('wp_head', 'wp_generator');

	// add automatic feed links to <head>
	add_theme_support( 'automatic-feed-links' );

	// add support for featured images
	add_theme_support( 'post-thumbnails' );

	// add some style to the backend editor
	add_editor_style( 'css/editor-style.css' );

  // add translation-support
  load_theme_textdomain( 'resblogsive', get_template_directory() . '/languages' );

	// custom header images
	$header_args = array(
		'default-image'			=> get_template_directory_uri() . '/images/headers/meisterYoda.jpg',
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

  // Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#ffffff',
    'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// register navigation menu
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'resblogsive' ),
	));

  // set content width
	if ( ! isset( $content_width ) )
		$content_width = 1076;

	// enqueue scripts and styles.
	function resblogsive_stylesnscripts() {
		wp_enqueue_style( 'brickfonts', '//brick.a.ssl.fastly.net/Bitter:700/Merriweather:400,700,400i/Source+Code Pro:400' );
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons.css' );
		wp_enqueue_style( 'resblogsive-style', get_stylesheet_uri() );
		// wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700|Source+Code+Pro|Bitter:700' );
		wp_enqueue_script( 'jquery', true );
		wp_enqueue_script( 'resblogsive-js', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'resblogsive_stylesnscripts' );

}

// hook into 'after_setup_theme' action
add_action( 'after_setup_theme', 'resblogsive_theme_features' );

?>
