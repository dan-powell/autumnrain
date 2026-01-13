import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

const env = loadEnv('', '');

export default defineConfig({
    css: {
        devSourcemap: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/sass/fontawesome.scss',
                'resources/js/portfolio.js',
                'resources/js/home.js',
                'resources/js/main.js'
            ],
            refresh: true,
        }),
    ],
    minify: false, //terser
    server: {
        host: "0.0.0.0",
        port: 5173,
        strictPort: true,
        origin: `${process.env.DDEV_PRIMARY_URL_WITHOUT_PORT}:5173`,
        cors: {
            origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(\.ddev\.site)(?::\d+)?$/,
        },
        // The following HMR and watch configurations are not explicitly required by DDEV Vite guide
        // but were present in your original config. Keeping them for now, but they might be redundant
        // or need adjustment depending on your exact setup.
        watch: {
            ignored: ['**/storage/**'],
        },
    },
});
