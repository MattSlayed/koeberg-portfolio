<?php
/**
 * Case Study Header Template Part
 *
 * Displays the case study header section with:
 * - Case number (e.g., "01")
 * - Title
 * - Client name
 * - Domain tags
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

$case_number = get_field('case_number');
$client = get_field('client');
$domain_tags = get_field('domain_tags');
?>

<header class="case-study-header">
    <?php if ($case_number) : ?>
        <span class="case-number"><?php echo esc_html($case_number); ?></span>
    <?php endif; ?>

    <h1 class="case-title"><?php the_title(); ?></h1>

    <?php if ($client) : ?>
        <div class="case-client"><?php echo esc_html($client); ?></div>
    <?php endif; ?>

    <?php if ($domain_tags) : ?>
        <div class="case-tags">
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
</header>
