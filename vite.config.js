import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/bootstrap.css',
                'resources/css/style.css',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/bootstrap.js',
                'resources/js/cardcarousel.js',
                'resources/js/jquery.js',
                'resources/js/modal.js',
                'resources/js/app.js',
                'resources/js/yamap.js',
            ],
            refresh: true,
        }),
    ],
});
