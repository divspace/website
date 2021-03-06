var elixir = require('laravel-elixir');

require('laravel-elixir-clear');

var assets = {
  css: './public/assets/css',
  fonts: './public/assets/fonts',
  img: './public/assets/img',
  js: './public/assets/js'
};

var fonts = {
  fontAwesome: './bower_components/font-awesome/fonts',
  hack: './bower_components/hack/fonts',
  sourceSansPro: './bower_components/source-sans-pro/fonts',
  sourceSerifPro: './bower_components/source-serif-pro/fonts'
};

var packages = {
  bootstrap: './bower_components/bootstrap/dist/js',
  formValidation: './resources/vendor/form-validation',
  jquery: './bower_components/jquery/dist',
  tether: './bower_components/tether/dist',
  typedJs: './bower_components/typed-js/js'
};

elixir(function(mix) {
  mix
    .clear([assets.css, assets.fonts, assets.img, assets.js])

    // Images
    .copy('./resources/assets/img/**', assets.img)

    // Fonts
    .copy(fonts.fontAwesome + '/fontawesome-webfont.*', assets.fonts + '/font-awesome')
    .copy(fonts.hack + '/**', assets.fonts)
    .copy(fonts.sourceSansPro + '/**', assets.fonts)
    .copy(fonts.sourceSerifPro + '/**', assets.fonts)

    // SCSS
    .sass('app.scss', assets.css)

    // CSS
    .styles([
      packages.formValidation + '/css/form-validation.css',
      packages.tether + '/css/tether.css',
      packages.tether + '/css/tether-theme-basic.css',
      assets.css + '/app.css'
    ], assets.css + '/app.css')

    // JavaScript
    .scripts([
      packages.jquery + '/jquery.js',
      packages.tether + '/js/tether.js',
      packages.bootstrap + '/bootstrap.js',
      packages.formValidation + '/js/form-validation.min.js',
      packages.formValidation + '/js/framework/bootstrap.min.js',
      packages.typedJs + '/typed.js',
      './resources/assets/js/**'
    ], assets.js + '/app.js');
});
