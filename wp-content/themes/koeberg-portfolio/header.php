<?php
/**
 * The header template
 *
 * Contains DOCTYPE, <head>, and site header with navigation.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400&family=IBM+Plex+Sans:wght@300;400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main">
    <?php esc_html_e('Skip to content', 'koeberg-portfolio'); ?>
</a>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-brand">
            MATTHEW<span>.</span>KOEBERG
        </a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle"
               aria-label="<?php esc_attr_e('Toggle menu', 'koeberg-portfolio'); ?>"
               aria-controls="nav-menu"
               aria-expanded="false" />
        <label for="nav-toggle" class="hamburger" aria-hidden="true">
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
        </label>

        <?php
        wp_nav_menu([
            'theme_location'  => 'primary',
            'container'       => 'nav',
            'container_class' => 'nav-menu',
            'container_id'    => 'nav-menu',
            'menu_class'      => 'nav-links',
            'menu_id'         => '',
            'fallback_cb'     => false,
            'depth'           => 1,
            'walker'          => new Koeberg_Nav_Walker(),
        ]);
        ?>
    </div>
</header>

<main id="main" class="site-main">
