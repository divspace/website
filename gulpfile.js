var elixir = require('laravel-elixir');

require('laravel-elixir-clear');

var assets = {
  css: './public/assets/css',
  fonts: './public/assets/fonts',
  img: './public/assets/img',
  js: './public/assets/js'
};

var packages = {
  bootstrap: './bower_components/bootstrap/dist/js',
  fontAwesome: './bower_components/font-awesome',
  hack: './bower_components/hack/build/webfonts',
  jquery: './bower_components/jquery/dist',
  typedJs: './bower_components/typed-js/js'
};

elixir(function(mix) {
  mix
    .clear([assets.css, assets.js])
    .copy(packages.fontAwesome + '/fonts/**', assets.fonts)
    .copy(packages.hack + '/fonts/**', assets.fonts)
    .sass('app.scss', assets.css)
    .styles([
      packages.hack + '/css/hack.css',
      assets.css + '/app.css'
    ], assets.css + '/app.css')
    .scripts([
      packages.jquery + '/jquery.js',
      packages.bootstrap + '/bootstrap.js',
      packages.typedJs + '/typed.js'
    ], assets.js + '/app.js')
});
