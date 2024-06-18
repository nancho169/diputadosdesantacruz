const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sourceMaps();

// Add these lines to import Bootstrap JS
mix.js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js');

// Optionally, if you use CSS instead of Sass, you can import Bootstrap CSS like this
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css');
