<?php
/**
 * Hero section template part
 *
 * Displays the homepage hero with headline, description, and key stats.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <span class="hero-label"><?php esc_html_e('AI & Operations Consulting', 'koeberg-portfolio'); ?></span>

            <h1>
                <?php
                printf(
                    /* translators: %s is emphasized text wrapped in em tags */
                    esc_html__('I build systems that turn %s into structured intelligence', 'koeberg-portfolio'),
                    '<em>' . esc_html__('operational chaos', 'koeberg-portfolio') . '</em>'
                );
                ?>
            </h1>

            <p class="hero-description">
                <?php esc_html_e('Operations analyst and AI integrator specializing in turning messy business processes into automated, data-driven systems. I help organizations move from reactive firefighting to proactive intelligence.', 'koeberg-portfolio'); ?>
            </p>

            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-value"><?php echo esc_html('75-90%'); ?></span>
                    <span class="stat-label"><?php esc_html_e('Time savings', 'koeberg-portfolio'); ?></span>
                </div>
                <div class="stat">
                    <span class="stat-value"><?php echo esc_html('R835K+'); ?></span>
                    <span class="stat-label"><?php esc_html_e('Risk identified', 'koeberg-portfolio'); ?></span>
                </div>
                <div class="stat">
                    <span class="stat-value"><?php echo esc_html('8'); ?></span>
                    <span class="stat-label"><?php esc_html_e('Case studies', 'koeberg-portfolio'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
