<?php
// ZETABYT Theme Functions

function zetabyt_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'ZETABYT' ),
    ) );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'zetabyt_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function zetabyt_scripts() {
    // Google Fonts
    wp_enqueue_style( 'ZETABYT-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@400;500;700&display=swap', array(), null );

    // Theme Custom Styles
    wp_enqueue_style( 'ZETABYT-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version') );

    // Custom Script
    wp_enqueue_script( 'ZETABYT-script', get_template_directory_uri() . '/script.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'zetabyt_scripts' );