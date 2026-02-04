<?php
/**
 * Case Study Custom Post Type Registration
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Case Study custom post type
 *
 * @return void
 */
function koeberg_register_case_study_cpt() {
    $labels = array(
        'name'               => __('Case Studies', 'koeberg-portfolio'),
        'singular_name'      => __('Case Study', 'koeberg-portfolio'),
        'menu_name'          => __('Case Studies', 'koeberg-portfolio'),
        'add_new'            => __('Add New', 'koeberg-portfolio'),
        'add_new_item'       => __('Add New Case Study', 'koeberg-portfolio'),
        'edit_item'          => __('Edit Case Study', 'koeberg-portfolio'),
        'view_item'          => __('View Case Study', 'koeberg-portfolio'),
        'all_items'          => __('All Case Studies', 'koeberg-portfolio'),
        'search_items'       => __('Search Case Studies', 'koeberg-portfolio'),
        'not_found'          => __('No case studies found.', 'koeberg-portfolio'),
        'not_found_in_trash' => __('No case studies found in Trash.', 'koeberg-portfolio'),
        'featured_image'     => __('Case Study Image', 'koeberg-portfolio'),
        'set_featured_image' => __('Set case study image', 'koeberg-portfolio'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'work', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('case_study', $args);
}
add_action('init', 'koeberg_register_case_study_cpt');

/**
 * Register Domain taxonomy for case studies
 *
 * @return void
 */
function koeberg_register_domain_taxonomy() {
    $labels = array(
        'name'              => __('Domains', 'koeberg-portfolio'),
        'singular_name'     => __('Domain', 'koeberg-portfolio'),
        'search_items'      => __('Search Domains', 'koeberg-portfolio'),
        'all_items'         => __('All Domains', 'koeberg-portfolio'),
        'edit_item'         => __('Edit Domain', 'koeberg-portfolio'),
        'update_item'       => __('Update Domain', 'koeberg-portfolio'),
        'add_new_item'      => __('Add New Domain', 'koeberg-portfolio'),
        'new_item_name'     => __('New Domain Name', 'koeberg-portfolio'),
        'menu_name'         => __('Domains', 'koeberg-portfolio'),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'domain'),
    );

    register_taxonomy('domain', array('case_study'), $args);
}
add_action('init', 'koeberg_register_domain_taxonomy');
