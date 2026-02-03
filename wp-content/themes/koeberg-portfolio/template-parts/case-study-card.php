<?php
/**
 * Case Study Card template part
 *
 * Displays a single case study card in the grid.
 *
 * Expected $args:
 * - case_number (string) - Two-digit case number (e.g., "01")
 * - title       (string) - Case study title
 * - client      (string) - Client or project name
 * - domain_tags (string) - Comma-separated tags
 * - summary     (string) - Brief case study summary
 * - permalink   (string) - URL to single case study
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Extract args with defaults
$case_number = $args['case_number'] ?? '';
$title       = $args['title'] ?? '';
$client      = $args['client'] ?? '';
$domain_tags = $args['domain_tags'] ?? '';
$summary     = $args['summary'] ?? '';
$permalink   = $args['permalink'] ?? '';
?>

<article class="case-study-card">
    <?php if ($case_number) : ?>
        <span class="case-card-meta"><?php echo esc_html($case_number); ?></span>
    <?php endif; ?>

    <h3 class="case-card-title">
        <?php if ($permalink) : ?>
            <a href="<?php echo esc_url($permalink); ?>">
                <?php echo esc_html($title); ?>
            </a>
        <?php else : ?>
            <?php echo esc_html($title); ?>
        <?php endif; ?>
    </h3>

    <?php if ($client) : ?>
        <p class="case-card-client"><?php echo esc_html($client); ?></p>
    <?php endif; ?>

    <?php if ($domain_tags) : ?>
        <div class="case-card-tags">
            <?php
            $tags = array_map('trim', explode(',', $domain_tags));
            foreach ($tags as $tag) :
                if ($tag) :
                ?>
                    <span class="case-tag"><?php echo esc_html($tag); ?></span>
                <?php
                endif;
            endforeach;
            ?>
        </div>
    <?php endif; ?>

    <?php if ($summary) : ?>
        <p class="case-card-summary"><?php echo esc_html($summary); ?></p>
    <?php endif; ?>

    <?php if ($permalink) : ?>
        <a href="<?php echo esc_url($permalink); ?>" class="case-card-link">
            <?php esc_html_e('View Case Study', 'koeberg-portfolio'); ?>
            <span aria-hidden="true">&rarr;</span>
        </a>
    <?php endif; ?>
</article>
