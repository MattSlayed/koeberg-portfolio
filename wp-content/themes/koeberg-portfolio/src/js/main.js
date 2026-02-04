// Import SCSS - Vite handles compilation
import '../scss/main.scss';

// Import navigation module for ARIA state sync
import './navigation.js';

// Import Prism.js for syntax highlighting
// Core library + Tomorrow theme + required languages
import Prism from 'prismjs';
import 'prismjs/themes/prism-tomorrow.css';
import 'prismjs/components/prism-python';
import 'prismjs/components/prism-sql';
import 'prismjs/components/prism-json';
import 'prismjs/components/prism-visual-basic';

// Theme initialization
document.addEventListener('DOMContentLoaded', () => {
  // Initialize Prism.js syntax highlighting for all code blocks
  Prism.highlightAll();
});

// Export for potential module usage
export default {};
