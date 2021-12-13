const mix = require('laravel-mix');

mix.js("resources/js/app.js", "public/js");

mix.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
]);

mix.copyDirectory('resources/images', 'public/images');
