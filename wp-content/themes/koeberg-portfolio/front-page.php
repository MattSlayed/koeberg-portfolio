<?php
/**
 * Homepage template (front-page.php)
 *
 * The template for displaying the front page with hero section and case study grid.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php get_template_part('template-parts/hero'); ?>

<section class="case-studies-section">
    <div class="container">
        <header class="section-header">
            <span class="section-label"><?php esc_html_e('Selected Work', 'koeberg-portfolio'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Case Studies', 'koeberg-portfolio'); ?></h2>
        </header>

        <?php
        // Query case studies
        $case_studies = new WP_Query([
            'post_type'      => 'case_study',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'post_status'    => 'publish',
        ]);

        if ($case_studies->have_posts()) :
        ?>
            <div class="case-study-grid">
                <?php
                while ($case_studies->have_posts()) :
                    $case_studies->the_post();

                    // Prepare args for template part
                    $args = [
                        'case_number' => get_field('case_number'),
                        'title'       => get_the_title(),
                        'client'      => get_field('client'),
                        'domain_tags' => get_field('domain_tags'),
                        'summary'     => get_field('summary'),
                        'permalink'   => get_permalink(),
                    ];

                    get_template_part('template-parts/case-study-card', null, $args);
                endwhile;
                ?>
            </div>
        <?php
        else :
        ?>
            <p class="no-case-studies">
                <?php esc_html_e('No case studies published yet.', 'koeberg-portfolio'); ?>
            </p>
        <?php
        endif;

        wp_reset_postdata();
        ?>
    </div>
</section>

<?php
get_footer();
