<?php
/**
 * Enqueue theme assets with Vite integration
 *
 * Handles both development (HMR via Vite dev server) and production
 * (manifest-based loading) modes automatically.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if Vite dev server is running
 *
 * @return bool True if dev server is accessible
 */
function koeberg_is_vite_dev_server_running(): bool {
    // Only check in debug mode to avoid production overhead
    if (!defined('WP_DEBUG') || !WP_DEBUG) {
        return false;
    }

    $dev_server = 'http://localhost:5173';

    // Suppress errors and use short timeout
    $context = stream_context_create([
        'http' => [
            'timeout' => 0.5,
            'ignore_errors' => true,
        ],
    ]);

    $response = @file_get_contents($dev_server . '/@vite/client', false, $context);

    return $response !== false;
}

/**
 * Enqueue theme assets
 */
function koeberg_enqueue_assets(): void {
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();
    $is_dev = koeberg_is_vite_dev_server_running();

    if ($is_dev) {
        // Development mode: Load from Vite dev server
        koeberg_enqueue_dev_assets($theme_uri);
    } else {
        // Production mode: Load from manifest
        koeberg_enqueue_production_assets($theme_uri, $theme_dir);
    }
}
add_action('wp_enqueue_scripts', 'koeberg_enqueue_assets');

/**
 * Enqueue development assets from Vite dev server
 *
 * @param string $theme_uri Theme URI
 */
function koeberg_enqueue_dev_assets(string $theme_uri): void {
    $dev_server = 'http://localhost:5173';

    // Vite client for HMR
    add_action('wp_head', function () use ($dev_server) {
        printf(
            '<script type="module" src="%s"></script>',
            esc_url($dev_server . '/@vite/client')
        );
    }, 1);

    // Main entry point
    wp_enqueue_script(
        'koeberg-main',
        $dev_server . '/js/main.js',
        [],
        null,
        true
    );

    // Add module type to script
    add_filter('script_loader_tag', 'koeberg_add_module_type', 10, 2);
}

/**
 * Enqueue production assets from Vite manifest
 *
 * @param string $theme_uri Theme URI
 * @param string $theme_dir Theme directory path
 */
function koeberg_enqueue_production_assets(string $theme_uri, string $theme_dir): void {
    $manifest_path = $theme_dir . '/assets/dist/.vite/manifest.json';

    // Check if manifest exists
    if (!file_exists($manifest_path)) {
        if (defined('WP_DEBUG') && WP_DEBUG) {
            add_action('wp_footer', function () {
                echo '<!-- Koeberg: No Vite manifest found. Run npm run build -->';
            });
        }
        return;
    }

    // Parse manifest
    $manifest = json_decode(file_get_contents($manifest_path), true);
    $entry = $manifest['js/main.js'] ?? null;

    if (!$entry) {
        return;
    }

    $dist_uri = $theme_uri . '/assets/dist/';

    // Enqueue CSS files
    if (!empty($entry['css'])) {
        foreach ($entry['css'] as $index => $css_file) {
            wp_enqueue_style(
                'koeberg-style-' . $index,
                $dist_uri . $css_file,
                [],
                null
            );
        }
    }

    // Enqueue main JavaScript
    wp_enqueue_script(
        'koeberg-main',
        $dist_uri . $entry['file'],
        [],
        null,
        true
    );

    // Add module type to script
    add_filter('script_loader_tag', 'koeberg_add_module_type', 10, 2);
}

/**
 * Add type="module" to script tags for ES modules
 *
 * @param string $tag    Script tag HTML
 * @param string $handle Script handle
 * @return string Modified script tag
 */
function koeberg_add_module_type(string $tag, string $handle): string {
    if ($handle === 'koeberg-main') {
        return str_replace('<script ', '<script type="module" ', $tag);
    }
    return $tag;
}
