import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/bootstrap.css',
                'resources/js/app.js',
                'resources/js/cardcarousel.js',
                'resources/js/jquery.js',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/modal.js'
            ],
            refresh: true,
        }),
    ],
});
