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
   .extract(['axios', 'lodash'])
 	.extract(['vue', 'vue-axios', 'vue-captcha'], 'public/js/vue')
 	.extract(['vee-validate', 'vee-validate/dist/locale/en', 'vee-validate/dist/locale/fr'], 'public/js/vee')
    .sass('resources/sass/app.scss', 'public/css');
 mix.webpackConfig({ node: { fs: 'empty' }});
 // Versionning of compiled assets in production mode
 if (mix.inProduction()) {
 	mix.version();
 }
 // BrowserSync enabled in local
 else {
 	mix.sourceMaps(true, 'source-map');
 }
