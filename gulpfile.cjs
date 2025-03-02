// Configuração do Gulp e tarefas
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rimraf = require('rimraf');
const livereload = require('gulp-livereload');

const config = {
    assets_path: './resources/assets',
    build_path: './public/build'
};

config.node_modules_path = './node_modules';

config.build_path_js = config.build_path + '/js';
config.build_vendor_js = config.build_path_js + '/vendor';
config.vendor_path_js = [
    config.node_modules_path + '/@bower_components/jquery/dist/jquery.min.js',
    config.node_modules_path + '/@bower_components/bootstrap/dist/js/bootstrap.min.js',
    config.node_modules_path + '/@bower_components/angular/angular.min.js',
    config.node_modules_path + '/@bower_components/angular-route/angular-route.min.js',
    config.node_modules_path + '/@bower_components/angular-resource/angular-resource.min.js',
    config.node_modules_path + '/@bower_components/angular-animate/angular-animate.min.js',
    config.node_modules_path + '/@bower_components/angular-messages/angular-messages.min.js',
    config.node_modules_path + '/@bower_components/angular-ui-bootstrap/ui-bootstrap.min.js',
    config.node_modules_path + '/@bower_components/angular-strap/dist/modules/navbar.min.js'
];

config.build_path_css = config.build_path + '/css';
config.build_vendor_css = config.build_path_css + '/vendor';
config.vendor_path_css = [
    config.node_modules_path + '/@bower_components/bootstrap/dist/css/bootstrap.min.css',
    config.node_modules_path + '/@bower_components/bootstrap/dist/css/bootstrap-theme.min.css'
];

// // Adicionar um novo estilo ao array existente
// config.vendor_path_css.push(config.node_modules_path + '/algum-outro-estilo/style.css');

// Tarefa para limpar o diretório de destino
gulp.task('clear-build-folder', function (cb) {
    rimraf(config.build_path, cb);
});

// Tarefa para copiar e processar arquivos de estilos
gulp.task('copy-styles', function () {
    return gulp.src([config.assets_path + '/css/**/*.css'])
        .pipe(gulp.dest(config.build_path_css))
        .pipe(livereload())
        .on('end', function() {
            return gulp.src(config.vendor_path_css)
                .pipe(gulp.dest(config.build_vendor_css))
                .pipe(livereload());
        });
});


// Tarefa para copiar e processar arquivos de scripts
gulp.task('copy-scripts', function () {
    return gulp.src([config.assets_path + '/js/**/*.js'])
        .pipe(gulp.dest(config.build_path_js))
        .pipe(livereload())
        .on('end', function() {
            return gulp.src(config.vendor_path_js)
                .pipe(gulp.dest(config.build_vendor_js))
                .pipe(livereload());
        });
});


// Tarefa para desenvolvimento com watch e live reload
function watchFiles() {
    livereload.listen();
    gulp.watch(config.assets_path + '/**', gulp.parallel('copy-styles', 'copy-scripts'));
}

gulp.task('watch-dev', gulp.series('clear-build-folder', gulp.parallel('copy-styles', 'copy-scripts'), watchFiles));

// Tarefa padrão que executa o watch-dev
gulp.task('default', gulp.series('watch-dev'));
