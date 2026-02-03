<?php
/**
 * Case Study Metrics Template Part
 *
 * Displays quantified results in an auto-fit grid.
 * Supports 1-4 metrics with value/label pairs.
 *
 * @package Koeberg_Portfolio
 *
 * ACF fields used:
 * - metric_1_value, metric_1_label
 * - metric_2_value, metric_2_label
 * - metric_3_value, metric_3_label
 * - metric_4_value, metric_4_label
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Check if any metric has a value
$has_metrics = false;
for ($i = 1; $i <= 4; $i++) {
    if (get_field("metric_{$i}_value")) {
        $has_metrics = true;
        break;
    }
}

// Don't render if no metrics
if (!$has_metrics) {
    return;
}
?>

<section class="case-metrics">
    <?php for ($i = 1; $i <= 4; $i++) :
        $value = get_field("metric_{$i}_value");
        $label = get_field("metric_{$i}_label");

        if ($value) :
    ?>
        <div class="metric-card">
            <span class="metric-value"><?php echo esc_html($value); ?></span>
            <?php if ($label) : ?>
                <span class="metric-label"><?php echo esc_html($label); ?></span>
            <?php endif; ?>
        </div>
    <?php endif; endfor; ?>
</section>
