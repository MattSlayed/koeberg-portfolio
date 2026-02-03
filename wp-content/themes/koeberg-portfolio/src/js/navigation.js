/**
 * Navigation ARIA state synchronization
 *
 * Keeps aria-expanded in sync with CSS checkbox toggle state.
 * Handles Escape key and click-outside-to-close behaviors.
 *
 * @package Koeberg_Portfolio
 */

(function () {
  'use strict';

  const toggle = document.getElementById('nav-toggle');
  const menu = document.getElementById('nav-menu');

  // Exit if elements not found
  if (!toggle || !menu) {
    return;
  }

  /**
   * Update ARIA attributes based on menu state
   * @param {boolean} isExpanded - Whether menu is open
   */
  function updateAriaState(isExpanded) {
    toggle.setAttribute('aria-expanded', isExpanded.toString());
    menu.setAttribute('aria-hidden', (!isExpanded).toString());
  }

  /**
   * Close the menu
   */
  function closeMenu() {
    toggle.checked = false;
    updateAriaState(false);
  }

  // Sync ARIA state when checkbox changes
  toggle.addEventListener('change', function () {
    updateAriaState(this.checked);
  });

  // Close menu when clicking outside header
  document.addEventListener('click', function (event) {
    if (!toggle.checked) {
      return;
    }

    const header = document.querySelector('.site-header');
    if (header && !header.contains(event.target)) {
      closeMenu();
    }
  });

  // Close menu on Escape key
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && toggle.checked) {
      closeMenu();
      toggle.focus(); // Return focus to toggle for keyboard users
    }
  });

  // Close menu when a nav link is clicked (for single-page navigation)
  menu.addEventListener('click', function (event) {
    if (event.target.matches('.nav-link')) {
      // Small delay to allow navigation to start
      setTimeout(closeMenu, 100);
    }
  });

  // Initialize ARIA state on page load
  updateAriaState(toggle.checked);
})();
