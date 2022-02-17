const LaravelMix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

LaravelMix.js('resources/js/app.js', 'public/js').vue();

LaravelMix.sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/oneui/themes/amethyst.scss', 'public/css/themes')
    .sass('resources/scss/oneui/themes/city.scss', 'public/css/themes')
    .sass('resources/scss/oneui/themes/flat.scss', 'public/css/themes')
    .sass('resources/scss/oneui/themes/modern.scss', 'public/css/themes')
    .sass('resources/scss/oneui/themes/smooth.scss', 'public/css/themes')


    .disableNotifications()


    .options({ processCssUrls: false });


LaravelMix.webpackConfig({
    resolve: {
        alias: {
            '@': require('path').resolve('./resources/js'),
        },
    },
});
