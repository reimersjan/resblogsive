<?php

// custom resblogsive theme features
function resblogsive_theme_features() {

	// remove generator-tag from <head>
	remove_action('wp_head', 'wp_generator');
	
	// add automatic feed links to <head>
	add_theme_support( 'automatic-feed-links' );

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
		'main_nav' => __( 'Main Navigation' ),
	));
	
	// add some style to the backend editor
	add_editor_style( 'css/editor-style.css' );
	
}

// hook into 'after_setup_theme' action
add_action( 'after_setup_theme', 'resblogsive_theme_features' );

?>
