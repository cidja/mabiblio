const mix = require('laravel-mix');

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

/* J'ai viré tailwind pour repasser sous bootstrap source: https://larabiz.fr/blog/comment-bootstrap-5-laravel 
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
    */
    
    mix
    .css('resources/css/app.css', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .version()
    