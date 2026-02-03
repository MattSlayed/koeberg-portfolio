<?php
/**
 * Footer template
 *
 * Closes the main content area opened in header.php and displays site footer.
 *
 * @package Koeberg_Portfolio
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

</main><!-- #main -->

<footer class="site-footer">
    <div class="container">
        <p class="footer-text">
            &copy; <?php echo esc_html(date('Y')); ?> Matthew Koeberg. All rights reserved.
        </p>
        <span class="footer-brand">Built with WordPress</span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
