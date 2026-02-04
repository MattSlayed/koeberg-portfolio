import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';
import prismjsPlugin from 'vite-plugin-prismjs-plus';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    liveReload([
      // Watch PHP files for full page reload
      resolve(__dirname, './**/*.php'),
    ]),
    prismjsPlugin({
      languages: ['python', 'sql', 'json', 'visual-basic'],
      theme: 'tomorrow',
      css: true,
    }),
  ],

  // Source files are in src/
  root: 'src',

  // Base URL for production assets
  base: process.env.NODE_ENV === 'production'
    ? '/wp-content/themes/koeberg-portfolio/assets/dist/'
    : '/',

  build: {
    // Output to assets/dist/ relative to theme root
    outDir: resolve(__dirname, 'assets/dist'),
    emptyOutDir: true,

    // Generate manifest for PHP asset loading
    manifest: true,

    rollupOptions: {
      input: {
        main: resolve(__dirname, 'src/js/main.js'),
      },
      output: {
        // Content-hashed filenames for cache busting
        entryFileNames: '[name]-[hash].js',
        chunkFileNames: '[name]-[hash].js',
        assetFileNames: '[name]-[hash].[ext]',
      },
    },
  },

  css: {
    devSourcemap: true,
  },

  server: {
    // Allow connections from Docker network
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    cors: true,
  },
});
