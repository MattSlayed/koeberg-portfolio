<?php
/**
 * Main template file - Design System Test
 *
 * This is a temporary test page to verify the design system.
 * Will be replaced with real templates in Phase 5.
 *
 * @package Koeberg_Portfolio
 */

get_header();
?>

<main id="main-content" class="site-main">
    <div class="site-grid">
        <div class="container">
            <section class="design-system-test">
            <header class="test-header">
                <h1>Design System Test</h1>
                <p>Visual verification of typography, colors, and spacing.</p>
            </header>

            <!-- Typography Scale -->
            <article class="test-section">
                <h2>Typography Scale</h2>
                <div class="type-samples">
                    <h1>Heading 1 - Newsreader Display</h1>
                    <h2>Heading 2 - Section Title</h2>
                    <h3>Heading 3 - Subsection</h3>
                    <h4>Heading 4 - Card Title</h4>
                    <h5>Heading 5 - Label</h5>
                    <h6>Heading 6 - Caption</h6>
                    <p>Body text using IBM Plex Sans. This paragraph demonstrates the base font styling with proper line-height for readability. The text should scale fluidly between 320px and 1200px viewport widths.</p>
                    <p><code>Inline code</code> uses IBM Plex Mono font family.</p>
                    <pre><code>// Code block example
function greet(name) {
    return `Hello, ${name}!`;
}</code></pre>
                </div>
            </article>

            <!-- Link Styling -->
            <article class="test-section content">
                <h2>Link Styling</h2>
                <p>Links in content areas <a href="#">must be underlined</a> per WordPress accessibility requirements. This is a <a href="#">second link</a> to demonstrate the styling.</p>
            </article>

            <!-- Color Palette -->
            <article class="test-section">
                <h2>Color Palette</h2>
                <div class="color-grid">
                    <div class="color-swatch" style="background: var(--color-bg-primary);">
                        <span class="swatch-label">--color-bg-primary</span>
                        <span class="swatch-value">#0A1828</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-bg-secondary);">
                        <span class="swatch-label">--color-bg-secondary</span>
                        <span class="swatch-value">#0F2132</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-bg-tertiary);">
                        <span class="swatch-label">--color-bg-tertiary</span>
                        <span class="swatch-value">#162A3E</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-accent);">
                        <span class="swatch-label">--color-accent</span>
                        <span class="swatch-value">#F59E0B</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-teal);">
                        <span class="swatch-label">--color-teal</span>
                        <span class="swatch-value">#14B8A6</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-text-primary); color: var(--color-bg-primary);">
                        <span class="swatch-label">--color-text-primary</span>
                        <span class="swatch-value">#F8FAFC</span>
                    </div>
                    <div class="color-swatch" style="background: var(--color-text-secondary); color: var(--color-bg-primary);">
                        <span class="swatch-label">--color-text-secondary</span>
                        <span class="swatch-value">#94A3B8</span>
                    </div>
                </div>
            </article>

            <!-- Category Colors -->
            <article class="test-section">
                <h2>Category Colors</h2>
                <div class="color-grid">
                    <div class="color-swatch" style="background: var(--cat-data);">
                        <span class="swatch-label">--cat-data</span>
                        <span class="swatch-value">#F59E0B</span>
                    </div>
                    <div class="color-swatch" style="background: var(--cat-systems);">
                        <span class="swatch-label">--cat-systems</span>
                        <span class="swatch-value">#0EA5E9</span>
                    </div>
                    <div class="color-swatch" style="background: var(--cat-execution);">
                        <span class="swatch-label">--cat-execution</span>
                        <span class="swatch-value">#10B981</span>
                    </div>
                    <div class="color-swatch" style="background: var(--cat-people);">
                        <span class="swatch-label">--cat-people</span>
                        <span class="swatch-value">#EC4899</span>
                    </div>
                    <div class="color-swatch" style="background: var(--cat-value);">
                        <span class="swatch-label">--cat-value</span>
                        <span class="swatch-value">#8B5CF6</span>
                    </div>
                </div>
            </article>

            <!-- Font Families -->
            <article class="test-section">
                <h2>Font Families</h2>
                <div class="font-samples">
                    <div class="font-sample" style="font-family: var(--font-display);">
                        <strong>Newsreader (Display):</strong> The quick brown fox jumps over the lazy dog. <em>Italic variant.</em>
                    </div>
                    <div class="font-sample" style="font-family: var(--font-body);">
                        <strong>IBM Plex Sans (Body):</strong> The quick brown fox jumps over the lazy dog.
                    </div>
                    <div class="font-sample" style="font-family: var(--font-mono);">
                        <strong>IBM Plex Mono (Code):</strong> const fox = 'quick brown';
                    </div>
                </div>
            </article>

            <!-- Spacing Scale -->
            <article class="test-section">
                <h2>Spacing Scale</h2>
                <div class="spacing-samples">
                    <div class="spacing-sample"><div style="width: var(--space-3xs); height: 24px; background: var(--color-accent);"></div><span>--space-3xs</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-2xs); height: 24px; background: var(--color-accent);"></div><span>--space-2xs</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-xs); height: 24px; background: var(--color-accent);"></div><span>--space-xs</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-s); height: 24px; background: var(--color-accent);"></div><span>--space-s</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-m); height: 24px; background: var(--color-accent);"></div><span>--space-m</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-l); height: 24px; background: var(--color-accent);"></div><span>--space-l</span></div>
                    <div class="spacing-sample"><div style="width: var(--space-xl); height: 24px; background: var(--color-accent);"></div><span>--space-xl</span></div>
                </div>
            </article>

            <!-- Responsive Grid Test -->
            <article class="test-section">
                <h2>Responsive Grid Test</h2>
                <p class="viewport-indicator">Resize browser to test breakpoints: 320px (1 col) | 768px (2 cols) | 1024px (3 cols)</p>
                <div class="test-grid">
                    <div class="test-col">
                        <h4>Column 1</h4>
                        <p>Visible at all breakpoints. Single column on mobile.</p>
                    </div>
                    <div class="test-col">
                        <h4>Column 2</h4>
                        <p>Joins column 1 in 2-column layout at 768px (md breakpoint).</p>
                    </div>
                    <div class="test-col">
                        <h4>Column 3</h4>
                        <p>Creates 3-column layout at 1024px (lg breakpoint).</p>
                    </div>
                </div>
            </article>
        </section>
        </div>
    </div>
</main>

<style>
/* Temporary test page styles - will be removed */
.design-system-test {
    padding: var(--space-xl) 0;
}

.test-header {
    margin-bottom: var(--space-2xl);
    padding-bottom: var(--space-l);
    border-bottom: 1px solid var(--color-border);
}

.test-section {
    margin-bottom: var(--space-2xl);
    padding: var(--space-l);
    background: var(--color-bg-secondary);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
}

.test-section h2 {
    color: var(--color-accent);
    margin-bottom: var(--space-m);
    padding-bottom: var(--space-s);
    border-bottom: 2px solid var(--color-accent);
}

.type-samples > * {
    margin-bottom: var(--space-m);
}

.color-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: var(--space-m);
}

.color-swatch {
    padding: var(--space-m);
    border-radius: var(--radius-md);
    color: var(--color-text-primary);
    display: flex;
    flex-direction: column;
    gap: var(--space-xs);
    min-height: 100px;
}

.swatch-label {
    font-family: var(--font-mono);
    font-size: var(--step--1);
}

.swatch-value {
    font-family: var(--font-mono);
    font-size: var(--step--2);
    opacity: 0.7;
}

.font-samples {
    display: flex;
    flex-direction: column;
    gap: var(--space-m);
}

.font-sample {
    padding: var(--space-m);
    background: var(--color-bg-tertiary);
    border-radius: var(--radius-md);
}

.spacing-samples {
    display: flex;
    flex-direction: column;
    gap: var(--space-s);
}

.spacing-sample {
    display: flex;
    align-items: center;
    gap: var(--space-m);
}

.spacing-sample span {
    font-family: var(--font-mono);
    font-size: var(--step--1);
    color: var(--color-text-muted);
}

.viewport-indicator {
    font-family: var(--font-mono);
    font-size: var(--step--1);
    color: var(--color-text-muted);
    margin-bottom: var(--space-m);
    padding: var(--space-s);
    background: var(--color-bg-tertiary);
    border-radius: var(--radius-sm);
}
</style>

<?php get_footer(); ?>
