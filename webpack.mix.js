const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
  .js('source/_assets/js/main.js', 'js')
  .css('source/_assets/css/main.css', 'css', [
    require('postcss-import'),
    require('tailwindcss'),
  ])
  .options({
    processCssUrls: false,
  })
  .browserSync({
    proxy: 'http://localhost:8000',
    port: 8888
  })
  .version();
