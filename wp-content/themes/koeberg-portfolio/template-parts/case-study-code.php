<?php
/**
 * Case Study Code Samples Template Part
 *
 * Displays code samples with Prism.js syntax highlighting.
 * Uses Carbon Fields complex field for repeatable code samples.
 *
 * @package Koeberg_Portfolio
 *
 * Language values: python, sql, json, vba, javascript, php
 * Prism.js expects: language-python, language-sql, etc.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$code_samples_raw = carbon_get_post_meta($post_id, 'code_samples');

// Collect valid code samples
$code_samples = array();

if (!empty($code_samples_raw)) {
    foreach ($code_samples_raw as $sample) {
        $language = $sample['code_language'] ?? '';
        $content = $sample['code_content'] ?? '';

        // Only include if both language AND content have values
        if ($language && $content) {
            $code_samples[] = array(
                'language' => $language,
                'title' => $sample['code_title'] ?? '',
                'content' => $content,
            );
        }
    }
}

// Early return if no valid samples
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
