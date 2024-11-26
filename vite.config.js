import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as sass from 'sass';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        minify: true,
    },
    css: {
        preprocessorOptions: {
            scss: {
                implementation: sass,
                sassOptions: {
                    outputStyle: 'expanded',
                    quietDeps: true
                }
            }
        }
    }
});
