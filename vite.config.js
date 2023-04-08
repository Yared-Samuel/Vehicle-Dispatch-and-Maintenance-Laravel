import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                //for datatables
                // 'resources/js/jquery.dataTables.js',
                // 'resources/js/jquery.min.js',
                // 'resources/css/jquery.dataTables.css',

            ],
            refresh: true,
        }),
    ],
});
