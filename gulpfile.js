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
  formValidation: './resources/vendor/form-validation',
  hack: './bower_components/hack/build/webfonts',
  jquery: './bower_components/jquery/dist',
  typedJs: './bower_components/typed-js/js',
  sourceSansPro: './bower_components/source-sans-pro/fonts'
};

elixir(function(mix) {
  mix
    .clear([assets.css, assets.fonts, assets.img, assets.js])

    .copy('./resources/assets/img/**', assets.img)

    .copy(packages.fontAwesome + '/fonts/**', assets.fonts)
    .copy(packages.hack + '/fonts/**', assets.fonts)
    .copy(packages.sourceSansPro + '/EOT/**', assets.fonts + '/eot')
    .copy(packages.sourceSansPro + '/WOFF/OTF/**', assets.fonts + '/woff/otf')
    .copy(packages.sourceSansPro + '/OTF/**', assets.fonts + '/otf')
    .copy(packages.sourceSansPro + '/TTF/**', assets.fonts + '/ttf')

    .sass('app.scss', assets.css)

    .styles([
      packages.formValidation + '/css/form-validation.css',
      packages.hack + '/css/hack.css',
      assets.css + '/app.css'
    ], assets.css + '/app.css')

    .scripts([
      packages.jquery + '/jquery.js',
      packages.bootstrap + '/bootstrap.js',
      packages.formValidation + '/js/form-validation.min.js',
      packages.formValidation + '/js/framework/bootstrap.min.js',
      packages.typedJs + '/typed.js',
      './resources/assets/js/**'
    ], assets.js + '/app.js');
});
