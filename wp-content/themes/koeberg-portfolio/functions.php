<?php
/**
 * Theme functions and definitions
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme version for cache busting
define('KOEBERG_VERSION', '1.0.0');

/**
 * Theme setup
 */
function koeberg_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'koeberg-portfolio'),
        'footer'  => __('Footer Menu', 'koeberg-portfolio'),
    ]);

    // Set content width
    $GLOBALS['content_width'] = 1200;
}
add_action('after_setup_theme', 'koeberg_setup');

// Include asset enqueuing
require_once get_template_directory() . '/inc/enqueue.php';
