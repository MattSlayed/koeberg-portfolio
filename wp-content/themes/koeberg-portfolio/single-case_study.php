<?php
/**
 * Single Case Study Template
 *
 * Displays individual case study with two-tier structure:
 * - Header: case number, title, client, tags
 * - Primary sections: Problem, Solution, Architecture
 * - Secondary items: category-specific content (data, systems, execution, people, value)
 * - Metrics: quantified results grid
 * - Code samples: handled in Phase 7
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

        <?php get_template_part('template-parts/case-study-header'); ?>

        <div class="case-study-content">

            <?php
            // Check if Problem section has any content
            $problem_data = get_field('problem_data');
            $problem_systems = get_field('problem_systems');
            $problem_people = get_field('problem_people');
            $has_problem = $problem_data || $problem_systems || $problem_people;

            if ($has_problem) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Problem',
                    'items' => array(
                        array('field' => 'problem_data', 'label' => 'Data & Insights', 'category' => 'data'),
                        array('field' => 'problem_systems', 'label' => 'Systems & Analysis', 'category' => 'systems'),
                        array('field' => 'problem_people', 'label' => 'People & Collaboration', 'category' => 'people'),
                    ),
                ));
            endif;

            // Check if Solution section has any content
            $solution_data = get_field('solution_data');
            $solution_systems = get_field('solution_systems');
            $solution_execution = get_field('solution_execution');
            $solution_people = get_field('solution_people');
            $solution_value = get_field('solution_value');
            $has_solution = $solution_data || $solution_systems || $solution_execution || $solution_people || $solution_value;

            if ($has_solution) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Solution',
                    'items' => array(
                        array('field' => 'solution_data', 'label' => 'Data & Insights', 'category' => 'data'),
                        array('field' => 'solution_systems', 'label' => 'Systems & Analysis', 'category' => 'systems'),
                        array('field' => 'solution_execution', 'label' => 'Execution & Tools', 'category' => 'execution'),
                        array('field' => 'solution_people', 'label' => 'People & Collaboration', 'category' => 'people'),
                        array('field' => 'solution_value', 'label' => 'Value & Strategy', 'category' => 'value'),
                    ),
                ));
            endif;

            // Check if Architecture section has any content
            $architecture_flow = get_field('architecture_flow');
            $architecture_tools = get_field('architecture_tools');
            $has_architecture = $architecture_flow || $architecture_tools;

            if ($has_architecture) :
                get_template_part('template-parts/case-study-section', null, array(
                    'label' => 'The Architecture',
                    'items' => array(
                        array('field' => 'architecture_flow', 'label' => 'Systems Flow', 'category' => 'systems'),
                        array('field' => 'architecture_tools', 'label' => 'Tools & Components', 'category' => 'execution'),
                    ),
                ));
            endif;

            // Metrics section (handles its own empty check)
            get_template_part('template-parts/case-study-metrics');
            ?>

        </div><!-- .case-study-content -->

    </div><!-- .container -->
</article>

<?php
endwhile;
get_footer();
?>
