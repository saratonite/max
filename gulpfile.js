var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

// Scripts

elixir(function(mix){
  mix.scripts(['../../../node_modules/jquery/dist/jquery.js','../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'],'public/js/vendor.js');
});

elixir(function(mix){
  mix.babel(['app.js'],'public/js/app.js');
});
