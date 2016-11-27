const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.styles([
        '../supima/assets-minified/helpers/helpers-all.css',
        '../supima/assets-minified/elements/elements-all.css',
        '../supima/assets-minified/icons/fontawesome/fontawesome.css',
        '../supima/assets-minified/icons/linecons/linecons.css',
        '../supima/assets-minified/snippets/snippets-all.css',
        '../supima/assets/themes/supina/layout.css',
        '../supima/assets/themes/supina/default/layout-color.css',
        '../supima/assets/themes/supina/default/framework-color.css',
        '../supima/assets/themes/supina/border-radius.css',
        '../supima/assets/helpers/colors.css',
        '../supima/assets-minified/demo-widgets.css'
    ]);

    mix.scripts([
        '../supima/assets-minified/js-core.js',
        '../supima/assets-minified/widgets/parsley/parsley.js',
        '../supima/assets-minified/demo-widgets.js',
    ]);

    mix.copy('resources/assets/supima/assets/images', 'public/images');
    //mix.copy('resources/assets/supima/assets/dummy-images', 'public/images/dummy-images');
    mix.copy('resources/assets/supima/assets-minified/icons/fontawesome', 'public/css');
    mix.copy('resources/assets/supima/assets-minified/icons/linecons', 'public/css');

    mix.webpack('app.js');

});
