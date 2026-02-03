<?php
/**
 * About page template (page-about.php)
 *
 * WordPress automatically loads this template for pages with slug "about".
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="about-page">
    <div class="container">
        <div class="about-grid">
            <article class="about-content">
                <?php
                while (have_posts()) :
                    the_post();
                ?>
                    <div class="about-prose">
                        <?php the_content(); ?>
                    </div>
                <?php
                endwhile;
                ?>
            </article>

            <aside class="about-sidebar">
                <?php get_template_part('template-parts/bio'); ?>
            </aside>
        </div>

        <?php get_template_part('template-parts/skills-matrix'); ?>
    </div>
</section>

<?php
get_footer();
