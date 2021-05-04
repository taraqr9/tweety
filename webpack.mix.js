const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").vue().postCss(
    "resources/css/main.css",
    "public/css",
    [require("tailwindcss")]
);
