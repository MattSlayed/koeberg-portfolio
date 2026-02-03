<?php
/**
 * Custom Navigation Walker for clean menu markup
 *
 * Produces minimal HTML without WordPress default classes.
 * Used with wp_nav_menu() in header.php.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom Walker for primary navigation
 *
 * Outputs: <li class="nav-item"><a class="nav-link" href="URL">TITLE</a></li>
 * No submenu support needed (depth: 1 used in wp_nav_menu call).
 */
class Koeberg_Nav_Walker extends Walker_Nav_Menu {

    /**
     * Starts the element output.
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Build CSS classes for list item
        $classes = ['nav-item'];

        // Add current-menu-item class if this is the current page
        if (in_array('current-menu-item', $item->classes, true) ||
            in_array('current_page_item', $item->classes, true)) {
            $classes[] = 'current-menu-item';
        }

        $class_string = implode(' ', array_filter($classes));

        // Start list item
        $output .= '<li class="' . esc_attr($class_string) . '">';

        // Build link attributes
        $atts = [];
        $atts['href']  = !empty($item->url) ? $item->url : '';
        $atts['class'] = 'nav-link';

        // Add aria-current for current page
        if (in_array('current-menu-item', $item->classes, true)) {
            $atts['aria-current'] = 'page';
        }

        // Filter link attributes
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        // Build attributes string
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        // Get item title
        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        // Output the link
        $output .= '<a' . $attributes . '>';
        $output .= esc_html($title);
        $output .= '</a>';
    }

    /**
     * Ends the element output.
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
