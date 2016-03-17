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

var handsontable_route = './resources/assets/bower/handsontable/dist/';
var schooljs = './resources/assets/js/school.js';

elixir(function(mix) {
    mix.sass('app.scss');

    mix.styles([
        handsontable_route + 'handsontable.full.css'
    ]);

    mix.scripts([
        handsontable_route + 'handsontable.full.js',
        handsontable_route + 'zeroclipboard/ZeroClipboard.js',
        handsontable_route + 'pikaday/pikaday.js',
        handsontable_route + 'moment/moment.js',
        schooljs
    ]);

});
