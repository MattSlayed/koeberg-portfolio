<?php
/**
 * The main template file
 *
 * This is a temporary design system test page.
 * Will be replaced with real templates in Phase 5.
 *
 * @package Koeberg_Portfolio
 */

get_header();
?>

<div class="container">
    <!-- Temporary test content - will be replaced in Phase 5 -->

    <section class="design-test" style="padding-top: var(--space-xl);">
        <h1>Design System Test</h1>
        <p>Phase 3: Responsive & Navigation</p>

        <!-- Typography Scale Test -->
        <section class="test-section">
            <h2>Typography Scale</h2>
            <p style="font-size: var(--step-5);">Step 5 - Display</p>
            <p style="font-size: var(--step-3);">Step 3 - H2</p>
            <p style="font-size: var(--step-1);">Step 1 - H4</p>
            <p style="font-size: var(--step-0);">Step 0 - Body</p>
            <p style="font-size: var(--step--1);">Step -1 - Small</p>
        </section>

        <!-- Responsive Grid Test -->
        <section class="test-section">
            <h2>Responsive Grid Test</h2>
            <p class="test-instructions">
                Resize browser to test breakpoints:
                <br>320px = 1 column | 768px = 2 columns | 1024px = 3 columns
            </p>
            <div class="test-grid">
                <div class="test-col">Column 1</div>
                <div class="test-col">Column 2</div>
                <div class="test-col">Column 3</div>
            </div>
        </section>

        <!-- Navigation Test Instructions -->
        <section class="test-section">
            <h2>Navigation Test</h2>
            <p class="test-instructions">
                <strong>Desktop (768px+):</strong> Horizontal nav links should be visible, hamburger hidden.
                <br><strong>Mobile (&lt;768px):</strong> Hamburger visible, click to open menu.
                <br><strong>Keyboard:</strong> Press Escape to close menu, Tab to navigate links.
            </p>
        </section>

        <!-- Color Palette Test -->
        <section class="test-section">
            <h2>Color Palette</h2>
            <div class="color-swatches">
                <div class="swatch" style="background: var(--color-bg-primary);">bg-primary</div>
                <div class="swatch" style="background: var(--color-bg-secondary);">bg-secondary</div>
                <div class="swatch" style="background: var(--color-accent); color: var(--color-bg-primary);">accent</div>
                <div class="swatch" style="background: var(--color-teal); color: var(--color-bg-primary);">teal</div>
            </div>
        </section>
    </section>
</div>

<style>
/* Temporary test page styles - will be removed in Phase 5 */
.test-section {
    margin-bottom: var(--space-xl);
    padding: var(--space-l);
    background: var(--color-bg-secondary);
    border-radius: var(--radius-md);
}

.test-instructions {
    color: var(--color-text-secondary);
    font-size: var(--step--1);
    margin-bottom: var(--space-m);
}

.color-swatches {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-s);
}

.swatch {
    padding: var(--space-m);
    border-radius: var(--radius-sm);
    font-size: var(--step--1);
    min-width: 120px;
    text-align: center;
}
</style>

<?php get_footer(); ?>
