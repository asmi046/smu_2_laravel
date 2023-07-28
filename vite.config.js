import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'public/css/style.css',
                'public/css/form-element.css',
                'public/css/text-styles.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
