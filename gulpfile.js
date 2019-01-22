var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.assetsPath = 'source/_assets/';
elixir.config.publicPath = 'source';

/* elixir.config.js.browserify.watchify = {
  enabled: true,
  options: {
    poll: true
  }
}
*/

elixir(function(mix) {
  var env = argv.e || argv.env || 'local';
  var port = argv.p || argv.port || 8080;

  mix
    .sass([
      'main.scss'
    ], 'source/css/main.css')
    .scripts([
      //'../../_lib/materializecss/js/bin/materialize.min.js',
      'webpro.js'
    ], 'source/js/main.js')
    .scripts([
        'events.js'
      ], 'source/js/events.js')
    .scripts([
      'anmeldung.js'
    ], 'source/js/anmeldung.js')
    .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    .browserSync({
      port: port,
      server: { baseDir: 'build_' + env },
      proxy: null,
      files: [ 'build_' + env + '/**/*' ]
    });
});

