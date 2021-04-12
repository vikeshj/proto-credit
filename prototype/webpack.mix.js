let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('./resources/js/app.js', 'public/js/');
// mix.postCss('./resources/css/app.css', 'public/css/');
mix.sass('./resources/scss/app.scss', 'public/css/');
mix.vue({ version: 3 });
mix.options({
    processCssUrls: false,
    postCss: [
        require("postcss-import"),
        require('postcss-nested'),
        require('autoprefixer'),
        require('@tailwindcss/jit'),
        //require('tailwindcss'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ]
});

/*
 |--------------------------------------------------------------------------
 | DO NOT EDIT BELOW
 |--------------------------------------------------------------------------
 */
mix.setPublicPath('public');
mix.setResourceRoot('./');
