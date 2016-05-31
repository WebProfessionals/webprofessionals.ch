var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'source/_assets/';
elixir.config.publicPath = 'source';

elixir(function(mix) {
  var env = argv.e || argv.env || 'local';

  mix
    .sass([
      '../vendor/material-design-lite/src/material-design-lite.scss',
      'main.scss'
    ], 'source/css/main.css')
    .scripts([
      '../vendor/material-design-lite/material.min.js'
    ], 'source/js/main.js')
    .exec('jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    .browserSync({
      server: { baseDir: 'build_' + env },
      proxy: null,
      files: [ 'build_' + env + '/**/*' ]
    });
});
