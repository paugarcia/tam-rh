const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   // .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/admin.scss', 'public/css')
   .copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/webfonts', 'public/webfonts')
   .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 6 versions'],
                grid: true,
                cascade: false
            })
        ]
    })
   .browserSync('tam-rh.test')
   .disableSuccessNotifications();
