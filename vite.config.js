import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";


export default defineConfig({
  plugins: [
    vue(),
    laravel({
      hotFile: 'public/jurreoutlawz/test/test.hot',
      buildDirectory: 'jurreoutlawz/test', // Most important lines
      input: ['resources/js/app.js'],
      refresh: true,
    }),
  ],
});