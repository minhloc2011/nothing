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

mix
  .styles([
  'public/css/core/bootstrap.min.css',
  'public/css/core/now-ui-kit.css',
  'public/css/core/style.css',
], 'public/css/app.css')
  .scripts([
    'public/js/core/jquery.min.js',
    'public/js/core/bootstrap.min.js',
    'public/js/core/popper.min.js',
    'public/js/core/now-ui-kit.js',
  ], 'public/js/vendor.js');
