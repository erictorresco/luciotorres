let mix = require('laravel-mix');

mix.postCss("static/css/style.css", ".", [
     require("tailwindcss"),
    ])
    .browserSync({
     proxy: "http://luciotorres.test",
     watch: true,
     files: ["templates/**/*.twig", "static/css/style.css"],
     notify: false,
     open: true
})