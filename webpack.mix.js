const mix = require('laravel-mix');

mix
  .js('./src/main.js', './dist/chemist-greenhouse-addon.bundle.js')
  .sass('./src/scss/main.scss', 'css/chemist-greenhouse-addon.bundle.css')
  .sass('./src/scss/admin.scss', 'css/chemist-greenhouse-addon-admin.bundle.css')
  .setPublicPath('./dist/')