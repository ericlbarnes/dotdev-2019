const mix = require('laravel-mix');

mix.postCss('./css/style.css', './', [
  require('postcss-import'),
  require('tailwindcss'),
  require('@fullhuman/postcss-purgecss')({
    content: [
      './**.php',
      './**/**.php',
      './**.html',
      './**.js',
    ],
    defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
  }),
]);