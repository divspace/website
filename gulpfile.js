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
  formValidation: './resources/vendor/form-validation',
  hack: './bower_components/hack/fonts',
  jquery: './bower_components/jquery/dist',
  sourceSansPro: './bower_components/source-sans-pro/fonts',
  sourceSerifPro: './bower_components/source-serif-pro/fonts',
  typedJs: './bower_components/typed-js/js'
};

elixir(function(mix) {
  mix
    .clear([assets.css, assets.fonts, assets.img, assets.js])

    // Images
    .copy('./resources/assets/img/**', assets.img)

    // Fonts
    .copy(packages.hack + '/**', assets.fonts)
    .copy(packages.sourceSansPro + '/**', assets.fonts)
    .copy(packages.sourceSerifPro + '/**', assets.fonts)

    // SCSS
    .sass('app.scss', assets.css)

    // CSS
    .styles([
      packages.formValidation + '/css/form-validation.css',
      assets.css + '/app.css'
    ], assets.css + '/app.css')

    // JavaScript
    .scripts([
      packages.jquery + '/jquery.js',
      packages.bootstrap + '/bootstrap.js',
      packages.formValidation + '/js/form-validation.min.js',
      packages.formValidation + '/js/framework/bootstrap.min.js',
      packages.typedJs + '/typed.js',
      './resources/assets/js/**'
    ], assets.js + '/app.js');
});
