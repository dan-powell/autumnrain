const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

if (mix.inProduction()) {
    mix.version();
}

mix.sass('resources/styles/base/base.scss', 'public/css/base.css')
    .sass('resources/styles/main/base.scss', 'public/css/main.css')
    .sass('resources/styles/sidebar/base.scss', 'public/css/sidebar.css')
    .sass('resources/styles/projects/365/base.scss', 'public/css/projects/365.css')
    .sass('resources/styles/projects/fungifalls/base.scss', 'public/css/projects/fungifalls.css')
    .sass('resources/styles/projects/pico8/base.scss', 'public/css/projects/pico8.css')
    .sass('resources/styles/projects/3dprint/base.scss', 'public/css/projects/3dprint.css')
    .sass('resources/styles/projects/aiwork/base.scss', 'public/css/projects/aiwork.css')
    .options({

    });

mix.js(['resources/scripts/main/base.js', 'resources/scripts/main/_home.js', 'resources/scripts/main/_projects.js'], 'public/js/main.js')
    .js('resources/scripts/projects/fungifalls/base.js', 'public/js/projects/fungifalls.js')
    .js('resources/scripts/projects/pico8/base.js', 'public/js/projects/pico8.js')
    .js('resources/scripts/projects/3dprint/base.js', 'public/js/projects/3dprint.js')
    .js('resources/scripts/projects/aiwork/base.js', 'public/js/projects/aiwork.js')
    .js(['node_modules/waypoints/lib/noframework.waypoints.js', 'node_modules/waypoints/lib/shortcuts/inview.js', 'resources/scripts/projects/365/base.js'], 'public/js/projects/365.js')
    .js('resources/scripts/sidebar/sidebar.js', 'public/js')
    .extract(['animejs']);

mix.browserSync({
    proxy: process.env.APP_PROXY,
    open: false,
    socket: {
        domain: 'http://bs.autumnrain.lndo.site',
        port: 80
    }
});
