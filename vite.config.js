import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import ViteWebp from 'vite-plugin-webp-generator'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        ViteWebp.default({ extensions:
                [
                    "png", "jpg"
                ]
        }),
    ],
    optimizeDeps: {
        exclude: ['@fancyapps/ui', 'swiper', 'minimasonry']
    }
});
