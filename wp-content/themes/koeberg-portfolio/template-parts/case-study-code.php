<?php
/**
 * Case Study Code Samples Template Part
 *
 * Displays code samples with Prism.js syntax highlighting.
 * Handles 3 fixed code sample field groups from ACF.
 *
 * @package Koeberg_Portfolio
 *
 * ACF Fields used:
 * - code_1_language, code_1_title, code_1_content
 * - code_2_language, code_2_title, code_2_content
 * - code_3_language, code_3_title, code_3_content
 *
 * Language values (from ACF select): python, sql, json, vba
 * Prism.js expects: language-python, language-sql, language-json, language-vba
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Collect valid code samples
$code_samples = array();

// Loop through the 3 fixed code sample slots
for ($i = 1; $i <= 3; $i++) {
    $language = get_field("code_{$i}_language");
    $content = get_field("code_{$i}_content");

    // Only include if both language AND content have values
    if ($language && $content) {
        $code_samples[] = array(
            'language' => $language,
            'title' => get_field("code_{$i}_title"),
            'content' => $content,
        );
    }
}

// Early return if no valid samples (no empty section markup)
if (empty($code_samples)) {
    return;
}
?>

<section class="case-code-samples">
    <h2 class="case-primary-label">Code Samples</h2>

    <div class="code-samples-grid">
        <?php foreach ($code_samples as $sample) : ?>
            <div class="code-block">
                <div class="code-block__header">
                    <span class="code-block__language"><?php echo esc_html(strtoupper($sample['language'])); ?></span>
                    <?php if ($sample['title']) : ?>
                        <span class="code-block__title"><?php echo esc_html($sample['title']); ?></span>
                    <?php endif; ?>
                </div>
                <pre class="code-block__pre language-<?php echo esc_attr($sample['language']); ?>"><code class="language-<?php echo esc_attr($sample['language']); ?>"><?php echo esc_html($sample['content']); ?></code></pre>
            </div>
        <?php endforeach; ?>
    </div>
</section>
