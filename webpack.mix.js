const mix = require('laravel-mix');
const { min } = require('lodash');

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
   // JS files
   .babel([
      'resources/js/custom/plugins.init.js'
   ], 'public/js/custom/plugins.init.js')
   .minify([ 'public/js/custom/plugins.init.js' ])
   // SCSS files
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/styles.scss', 'public/css')
   .sass('resources/sass/login.scss', 'public/css');

mix.browserSync('http://localhost:8000');
mix.disableNotifications();