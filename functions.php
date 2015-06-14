<?php

// custom resblogsive theme features
function resblogsive_theme_features()
{

    // add automatic feed links to <head>
    add_theme_support('automatic-feed-links');

    // add support for title-tag
    add_theme_support('title-tag');

    // add support for featured images
    add_theme_support('post-thumbnails');

    // add some style to the backend editor
    add_editor_style('css/editor-style.css');

    // add translation-support
    load_theme_textdomain('resblogsive', get_template_directory().'/languages');

    // register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'resblogsive'),
    ));

  // set content width
    if (!isset($content_width)) {
        $content_width = 1076;
    }

    // enqueue scripts and styles.
    function resblogsive_stylesnscripts()
    {
        wp_enqueue_style('brickfonts', '//brick.a.ssl.fastly.net/Bitter:700,700i/Merriweather:400,700,400i/Source+Code Pro:400');
        wp_enqueue_style('genericons', get_template_directory_uri().'/css/genericons.css');
        wp_enqueue_style('resblogsive-style', get_stylesheet_uri());
        wp_enqueue_script('jquery', true);
        wp_enqueue_script('resblogsive-js', get_template_directory_uri().'/js/scripts.js', array('jquery'), '', true);
    }
    add_action('wp_enqueue_scripts', 'resblogsive_stylesnscripts');
}

// hook into 'after_setup_theme' action
add_action('after_setup_theme', 'resblogsive_theme_features');
