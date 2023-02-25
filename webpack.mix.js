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

mix.copy('resources/js', 'public/js')
    //.sass('resources/sass/app.scss', 'public/css')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts', 'public/fonts')
    .copy('resources/bootstrap', 'public/bootstrap')
    .copy('resources/css', 'public/css')
    .copy('resources/owlcarousel', 'public/owlcarousel');


