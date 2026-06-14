<?php
function opensource_uom_enqueue_assets() {
    wp_enqueue_style(
        'opensource-uom-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.1'
    );
    wp_enqueue_script(
        'opensource-uom-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.1',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'opensource_uom_enqueue_assets' );

function opensource_uom_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'opensource_uom_setup' );

/* Remove default WordPress from <head> */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

/* Excerpt length */
function opensource_uom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'opensource_uom_excerpt_length', 999 );

function opensource_uom_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'opensource_uom_excerpt_more' );
