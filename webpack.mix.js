const mix = require('laravel-mix')
mix
//   .js("resources/js/app.js", "public/js")
  .postCss("app/css/app.css", "public/css", [require("tailwindcss")]);