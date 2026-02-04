<?php
/**
 * Single Case Study Template
 *
 * Simplified template using WordPress block editor for content.
 * Structure your case study using Gutenberg blocks:
 * - Heading blocks for sections (Problem, Solution, Architecture)
 * - Paragraph/List blocks for content
 * - Code block for code samples
 * - Table or columns for metrics
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) : the_post();
?>

<article class="case-study-single">
    <div class="container">

        <header class="case-study-header">
            <?php
            // Get domain terms
            $domains = get_the_terms(get_the_ID(), 'domain');
            ?>

            <h1 class="case-title"><?php the_title(); ?></h1>

            <?php if ($domains && !is_wp_error($domains)) : ?>
                <div class="case-tags">
                    <?php foreach ($domains as $domain) : ?>
                        <span class="case-tag"><?php echo esc_html($domain->name); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="case-study-content">
            <?php the_content(); ?>
        </div>

    </div>
</article>

<?php
endwhile;
get_footer();
?>
