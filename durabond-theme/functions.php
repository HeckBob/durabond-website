<?php
/**
 * Durabond 2025 Theme — functions.php
 */

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'durabond-style',
        get_template_directory_uri() . '/assets/css/durabond.css',
        [],
        '1.0.0'
    );
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap',
        [],
        null
    );
    wp_enqueue_script(
        'durabond-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true   // load in footer
    );
});

// Theme supports
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
});

// Register nav menus (optional)
register_nav_menus([
    'primary' => 'Primary Navigation',
]);
