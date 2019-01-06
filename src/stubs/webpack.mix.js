const mix = require('laravel-mix');

const Clean = require('clean-webpack-plugin');

mix
    .webpackConfig({
        devtool: 'source-map',
        plugins: [
            new Clean(['public/js', 'public/css'], {verbose: false})
        ]
    })
    .options({
        processCssUrls: false,
        clearConsole: false
    })
    .js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css', {
        importer: require('node-sass-glob-importer')()
   })
   .copy('node_modules/popper.js/dist/umd/popper.js.map', 'public/js')
   .browserSync(
       {
        //    proxy:'http://lara.dev',
        //    host:'lara.dev',
           port: 3000,
           open: 'external',
           browser: ['google chrome','safari']
       }
   )
    .version();

    // .extract()
