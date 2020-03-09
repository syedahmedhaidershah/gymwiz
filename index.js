const mix = require('laravel-mix');

mix.browserSync({
    proxy: 'project.dev'
});
