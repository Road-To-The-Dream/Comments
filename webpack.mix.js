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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/user_files', 'public/user_files');

mix.copyDirectory([
    'resources/img',
    'node_modules/bootstrap-fileinput/img/loading.gif',
], 'public/img');

mix.styles([
    'resources/css/create.css',
    'node_modules/bootstrap-fileinput/css/fileinput.css'
], 'public/css/my.css');

mix.styles([
    'resources/css/404.css',
], 'public/css/error.css');

mix.styles([
    'resources/css/welcome.css',
], 'public/css/welcome.css');

mix.scripts([
    'node_modules/bootstrap-fileinput/js/fileinput.js',
    'resources/js/notify.min.js',
    'resources/js/create.js'
], 'public/js/my.js');

