<?php
/**
 * ACF Local JSON Configuration
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set ACF JSON save point
 *
 * @param string $path Default save path
 * @return string Modified save path
 */
function koeberg_acf_json_save_point($path) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'koeberg_acf_json_save_point');

/**
 * Set ACF JSON load point
 *
 * @param array $paths Default load paths
 * @return array Modified load paths
 */
function koeberg_acf_json_load_point($paths) {
    // Remove default path
    unset($paths[0]);

    // Add theme path
    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;
}
add_filter('acf/settings/load_json', 'koeberg_acf_json_load_point');
