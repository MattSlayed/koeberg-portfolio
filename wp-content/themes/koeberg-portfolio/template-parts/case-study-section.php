<?php
/**
 * Case Study Section Template Part
 *
 * Displays a primary section (Problem, Solution, Architecture) with secondary category items.
 * Uses two-tier structure matching the HTML reference design.
 *
 * @package Koeberg_Portfolio
 *
 * @param array $args {
 *     @type string $label Section label (e.g., "The Problem")
 *     @type array  $items Array of items, each containing:
 *         @type string $field    ACF field name
 *         @type string $label    Display label for the category
 *         @type string $category Category for color coding (data, systems, execution, people, value)
 * }
 *
 * Category color mapping (applied via data-category attribute):
 * - data: amber (#f59e0b) - Data & Insights
 * - systems: blue (#0ea5e9) - Systems & Analysis
 * - execution: green (#10b981) - Execution & Tools
 * - people: pink (#ec4899) - People & Collaboration
 * - value: purple (#8b5cf6) - Value & Strategy
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Extract args
$label = $args['label'] ?? '';
$items = $args['items'] ?? array();

// Check if any item has content
$has_content = false;
foreach ($items as $item) {
    if (get_field($item['field'])) {
        $has_content = true;
        break;
    }
}

// Only render if we have content
if (!$has_content || !$label) {
    return;
}
?>

<section class="case-primary-section">
    <h2 class="case-primary-label"><?php echo esc_html($label); ?></h2>

    <div class="case-secondary-items">
        <?php foreach ($items as $item) :
            $field_value = get_field($item['field']);
            if ($field_value) :
        ?>
            <div class="case-secondary-item" data-category="<?php echo esc_attr($item['category']); ?>">
                <span class="case-secondary-label"><?php echo esc_html($item['label']); ?></span>
                <p><?php echo wp_kses_post($field_value); ?></p>
            </div>
        <?php endif; endforeach; ?>
    </div>
</section>
