const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') // Confirme se sua pasta é "sass"
   .setPublicPath('public');

// Combina estilos em um único arquivo CSS
mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
], 'public/css/vendor.css');

// Combina os scripts em um único arquivo JS
mix.scripts([
    'node_modules/angular/angular.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/angular-route/angular-route.min.js',
    'node_modules/angular-resource/angular-resource.min.js',
    'node_modules/angular-animate/angular-animate.min.js',
    'node_modules/angular-messages/angular-messages.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', // Substituído para incluir Popper.js
], 'public/js/all.js');

// Ativa o BrowserSync para recarregamento automático
mix.browserSync({
    proxy: '127.0.0.1:8000', // Substitua pela URL do servidor Laravel
    files: [
        'resources/views/**/*.blade.php',
        'public/css/**/*.css',
        'public/js/**/*.js',
        'resources/**/*.js',
        'resources/**/*.scss',
    ]
});

// Habilita o versionamento de arquivos para cache busting
mix.version();
