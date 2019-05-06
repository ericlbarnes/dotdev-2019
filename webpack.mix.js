const mix = require('laravel-mix');

mix.postCss('./css/style.css', './')
  .options({
    postCss: [
      require('postcss-import'),
      require('tailwindcss'),
    ]
  });

if(mix.inProduction()) {
  mix.options({
    postCss: [
      require('@fullhuman/postcss-purgecss')({
        content: [
          './**.php',
          './**/**.php',
          './**.html',
          './**.js',
        ],
        defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
      }),
    ]
  });
}