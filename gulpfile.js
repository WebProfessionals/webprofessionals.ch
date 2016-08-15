var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'source/_assets/';
elixir.config.publicPath = 'source';

elixir.config.js.browserify.watchify = {
  enabled: true,
  options: {
    poll: true
  }
}

elixir(function(mix) {
  var env = argv.e || argv.env || 'local';

  mix
    .sass([
      'main.scss'
    ], 'source/css/main.css')
    .scripts([
      '../../_lib/materializecss/js/bin/materialize.min.js',
      'webpro.js'
    ], 'source/js/main.js')
    .exec('jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    .browserSync({
      server: { baseDir: 'build_' + env },
      proxy: null,
      files: [ 'build_' + env + '/**/*' ]
    });
});

