<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails');

function childhood_styles(): void
{
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
}

function childhood_scripts(): void
{
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}
