<?php
/**
 * Skills Matrix template part
 *
 * Displays Technical and Business skill categories with proficiency levels.
 * Skills are hardcoded since ACF Options Page requires Pro version.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Technical skills data
$technical_skills = array(
    array(
        'name'  => 'AI Implementation (Claude, Gemini)',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Workflow Automation (n8n, Zapier)',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Business Intelligence & Dashboards',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Data Quality & ETL',
        'level' => 'Advanced',
    ),
    array(
        'name'  => 'Python, SQL, Docker',
        'level' => 'Proficient',
    ),
    array(
        'name'  => 'Google Workspace Integration',
        'level' => 'Expert',
    ),
);

// Business skills data
$business_skills = array(
    array(
        'name'  => 'NEC Contract Analysis (NEC3/NEC4)',
        'level' => 'Advanced',
    ),
    array(
        'name'  => 'ISO 9001 QMS Documentation',
        'level' => 'Advanced',
    ),
    array(
        'name'  => 'Stakeholder Communication',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Requirements Analysis',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Process Mapping & Optimization',
        'level' => 'Expert',
    ),
    array(
        'name'  => 'Executive Reporting',
        'level' => 'Advanced',
    ),
);
?>

<section class="skills-section">
    <div class="container">
        <header class="section-header">
            <span class="section-label"><?php esc_html_e('Capabilities', 'koeberg-portfolio'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Skills & Expertise', 'koeberg-portfolio'); ?></h2>
        </header>

        <div class="skills-matrix">
            <div class="skills-category">
                <h3 class="skills-category-title"><?php esc_html_e('Technical', 'koeberg-portfolio'); ?></h3>
                <div class="skills-list">
                    <?php foreach ($technical_skills as $skill) : ?>
                        <div class="skill-item">
                            <span class="skill-name"><?php echo esc_html($skill['name']); ?></span>
                            <span class="skill-level"><?php echo esc_html($skill['level']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="skills-category">
                <h3 class="skills-category-title"><?php esc_html_e('Business', 'koeberg-portfolio'); ?></h3>
                <div class="skills-list">
                    <?php foreach ($business_skills as $skill) : ?>
                        <div class="skill-item">
                            <span class="skill-name"><?php echo esc_html($skill['name']); ?></span>
                            <span class="skill-level"><?php echo esc_html($skill['level']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
