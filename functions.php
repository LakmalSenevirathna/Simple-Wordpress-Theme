<?php
//stylesheet

function todayfav_enqueue_scripts() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], get_template_directory_uri().'/css/theme.css', 'all' );
    //wp_enqueue_scripts( 'main-js' , get_template_directory_uri().'/js/main.js', true );
}

add_action( 'wp_enqueue_scripts', 'todayfav_enqueue_scripts');

//Theme Support

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'wpb_theme_setup');

//Excerpt Length Control

function set_excerpt_length() {
    return 50;
}

add_action( 'excerpt_length', 'set_excerpt_length');

?>