<?php
/**
 * Case Study Metrics Template Part
 *
 * Displays quantified results in an auto-fit grid.
 * Uses Carbon Fields complex field for repeatable metrics.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$metrics = carbon_get_post_meta($post_id, 'metrics');

// Don't render if no metrics
if (empty($metrics)) {
    return;
}
?>

<section class="case-metrics">
    <?php foreach ($metrics as $metric) :
        $value = $metric['metric_value'] ?? '';
        $label = $metric['metric_label'] ?? '';

        if ($value) :
    ?>
        <div class="metric-card">
            <span class="metric-value"><?php echo esc_html($value); ?></span>
            <?php if ($label) : ?>
                <span class="metric-label"><?php echo esc_html($label); ?></span>
            <?php endif; ?>
        </div>
    <?php endif; endforeach; ?>
</section>
