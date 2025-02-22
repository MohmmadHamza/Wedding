import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'your-domain.com',
        port: 5173, // This can be any available port
        hmr: {
            host: 'your-domain.com',
        },
    },
});
