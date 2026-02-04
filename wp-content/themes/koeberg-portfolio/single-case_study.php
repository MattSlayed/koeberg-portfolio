<?php
/**
 * Single Case Study Template
 *
 * Displays individual case study with two-tier structure:
 * - Header: case number, title, client, tags
 * - Primary sections: Problem, Solution, Architecture
 * - Metrics: quantified results grid
 * - Code samples: syntax-highlighted code with Prism.js
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) : the_post();
    $post_id = get_the_ID();
?>

<article class="case-study-single">
    <div class="container">

        <?php get_template_part('template-parts/case-study-header'); ?>

        <div class="case-study-content">

            <?php
            // Check if Problem section has any content
            $problem_data = carbon_get_post_meta($post_id, 'problem_data');
            $problem_systems = carbon_get_post_meta($post_id, 'problem_systems');
            $problem_people = carbon_get_post_meta($post_id, 'problem_people');
            $has_problem = $problem_data || $problem_systems || $problem_people;

            if ($has_problem) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Problem',
                    'items' => array(
                        array('content' => $problem_data, 'label' => 'Data & Insights', 'category' => 'data'),
                        array('content' => $problem_systems, 'label' => 'Systems & Analysis', 'category' => 'systems'),
                        array('content' => $problem_people, 'label' => 'People & Collaboration', 'category' => 'people'),
                    ),
                ));
            endif;

            // Check if Solution section has any content
            $solution_data = carbon_get_post_meta($post_id, 'solution_data');
            $solution_systems = carbon_get_post_meta($post_id, 'solution_systems');
            $solution_execution = carbon_get_post_meta($post_id, 'solution_execution');
            $solution_people = carbon_get_post_meta($post_id, 'solution_people');
            $solution_value = carbon_get_post_meta($post_id, 'solution_value');
            $has_solution = $solution_data || $solution_systems || $solution_execution || $solution_people || $solution_value;

            if ($has_solution) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Solution',
                    'items' => array(
                        array('content' => $solution_data, 'label' => 'Data & Insights', 'category' => 'data'),
                        array('content' => $solution_systems, 'label' => 'Systems & Analysis', 'category' => 'systems'),
                        array('content' => $solution_execution, 'label' => 'Execution & Tools', 'category' => 'execution'),
                        array('content' => $solution_people, 'label' => 'People & Collaboration', 'category' => 'people'),
                        array('content' => $solution_value, 'label' => 'Value & Strategy', 'category' => 'value'),
                    ),
                ));
            endif;

            // Check if Architecture section has any content
            $architecture_flow = carbon_get_post_meta($post_id, 'architecture_flow');
            $architecture_tools = carbon_get_post_meta($post_id, 'architecture_tools');
            $has_architecture = $architecture_flow || $architecture_tools;

            if ($has_architecture) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Architecture',
                    'items' => array(
                        array('content' => $architecture_flow, 'label' => 'Systems Flow', 'category' => 'systems'),
                        array('content' => $architecture_tools, 'label' => 'Tools & Components', 'category' => 'execution'),
                    ),
                ));
            endif;

            // Metrics section
            get_template_part('template-parts/case-study-metrics');

            // Code samples section
            get_template_part('template-parts/case-study-code');
            ?>

        </div><!-- .case-study-content -->

    </div><!-- .container -->
</article>

<?php
endwhile;
get_footer();
?>
