<?php
/**
 * Carbon Fields Setup
 *
 * Defines custom fields for case studies using Carbon Fields.
 *
 * @package Koeberg_Portfolio
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Load Carbon Fields
 */
function koeberg_load_carbon_fields() {
    $autoload = get_template_directory() . '/vendor/autoload.php';
    if (file_exists($autoload)) {
        require_once $autoload;
        \Carbon_Fields\Carbon_Fields::boot();
    }
}
add_action('after_setup_theme', 'koeberg_load_carbon_fields');

/**
 * Register Case Study fields
 */
function koeberg_register_case_study_fields() {
    Container::make('post_meta', __('Case Study Details', 'koeberg-portfolio'))
        ->where('post_type', '=', 'case_study')
        ->add_tab(__('Basic Info', 'koeberg-portfolio'), array(
            Field::make('text', 'case_number', __('Case Number', 'koeberg-portfolio'))
                ->set_help_text('e.g., 01, 02, 03')
                ->set_width(25),
            Field::make('text', 'client', __('Client', 'koeberg-portfolio'))
                ->set_help_text('Client or context description')
                ->set_width(75),
            Field::make('text', 'domain_tags', __('Domain Tags', 'koeberg-portfolio'))
                ->set_help_text('Comma-separated tags, e.g., Contract Management, Automation, VBA'),
        ))
        ->add_tab(__('The Problem', 'koeberg-portfolio'), array(
            Field::make('textarea', 'problem_data', __('Data & Insights', 'koeberg-portfolio'))
                ->set_help_text('Data-related challenges'),
            Field::make('textarea', 'problem_systems', __('Systems & Analysis', 'koeberg-portfolio'))
                ->set_help_text('Systems and process challenges'),
            Field::make('textarea', 'problem_people', __('People & Collaboration', 'koeberg-portfolio'))
                ->set_help_text('People and collaboration challenges'),
        ))
        ->add_tab(__('The Solution', 'koeberg-portfolio'), array(
            Field::make('textarea', 'solution_data', __('Data & Insights', 'koeberg-portfolio'))
                ->set_help_text('How data challenges were addressed'),
            Field::make('textarea', 'solution_systems', __('Systems & Analysis', 'koeberg-portfolio'))
                ->set_help_text('Systems and technical solutions'),
            Field::make('textarea', 'solution_execution', __('Execution & Tools', 'koeberg-portfolio'))
                ->set_help_text('Implementation approach and tools used'),
            Field::make('textarea', 'solution_people', __('People & Collaboration', 'koeberg-portfolio'))
                ->set_help_text('How people/collaboration improved'),
            Field::make('textarea', 'solution_value', __('Value & Strategy', 'koeberg-portfolio'))
                ->set_help_text('Business value and strategic impact'),
        ))
        ->add_tab(__('Architecture', 'koeberg-portfolio'), array(
            Field::make('textarea', 'architecture_flow', __('Systems Flow', 'koeberg-portfolio'))
                ->set_help_text('Describe the system architecture and data flow'),
            Field::make('textarea', 'architecture_tools', __('Tools & Components', 'koeberg-portfolio'))
                ->set_help_text('List tools and components used'),
        ))
        ->add_tab(__('Metrics', 'koeberg-portfolio'), array(
            Field::make('complex', 'metrics', __('Impact Metrics', 'koeberg-portfolio'))
                ->set_help_text('Add quantified business impact metrics')
                ->add_fields(array(
                    Field::make('text', 'metric_value', __('Value', 'koeberg-portfolio'))
                        ->set_help_text('e.g., R835K+, 75-90%, 40 hours')
                        ->set_width(30),
                    Field::make('text', 'metric_label', __('Label', 'koeberg-portfolio'))
                        ->set_help_text('e.g., Identified Savings, Time Reduction')
                        ->set_width(70),
                ))
                ->set_layout('tabbed-horizontal'),
        ))
        ->add_tab(__('Code Samples', 'koeberg-portfolio'), array(
            Field::make('complex', 'code_samples', __('Code Samples', 'koeberg-portfolio'))
                ->set_help_text('Add code samples with syntax highlighting')
                ->add_fields(array(
                    Field::make('text', 'code_title', __('Title', 'koeberg-portfolio'))
                        ->set_help_text('e.g., Contract Clause Extraction')
                        ->set_width(50),
                    Field::make('select', 'code_language', __('Language', 'koeberg-portfolio'))
                        ->set_options(array(
                            'python' => 'Python',
                            'sql' => 'SQL',
                            'vba' => 'VBA',
                            'json' => 'JSON',
                            'javascript' => 'JavaScript',
                            'php' => 'PHP',
                        ))
                        ->set_width(50),
                    Field::make('textarea', 'code_content', __('Code', 'koeberg-portfolio'))
                        ->set_rows(15)
                        ->set_help_text('Paste your code here'),
                ))
                ->set_layout('tabbed-vertical'),
        ));
}
add_action('carbon_fields_register_fields', 'koeberg_register_case_study_fields');
