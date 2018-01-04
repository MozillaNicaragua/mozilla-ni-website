//Note:
// For the first time it is needed to run:
// gulp scripts
// gulp sasss
// Finally you can choose between run with borwsersync or without it.
// gulp sync (in order to work with browser-sync)
// gulp (refresh the browser by your own ;)

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create(),
    uglify = require('gulp-uglify');

var path = {
    srcjs: './src/js/',
    srcsass: './src/sass/',
    distjs: './assets/js/',
    distcss: './assets/css/'
};

var scripts = [
    path.srcjs + 'vendor.js',
    path.srcjs + 'scripts.js',
];

gulp.task('sass', function(){
    return gulp.src(path.srcsass + 'styles.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({browsers: ['last 3 version', '> 5%', 'ie > 8', 'ios > 5']}))
        .pipe(gulp.dest(path.distcss))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write(undefined, { sourceRoot: null }))
        .pipe(cssnano())
        .pipe(gulp.dest(path.distcss))
});

gulp.task('scripts', function(){
    return gulp.src(scripts)
        .pipe(plumber())
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.distjs))
});

//on console: gulp sync
gulp.task('sync', function(){
    browserSync.init({
        //Put the staging/local url below
        proxy: " "
    });
    gulp.watch(path.srcjs + '**/*.js', ['scripts']).on('change', browserSync.reload);;
    gulp.watch(path.srcsass + '**/*.scss', ['sass']).on('change', browserSync.reload);;
});

gulp.task('default', function(){
    gulp.watch(path.srcjs + '**/*.js', ['scripts']);
    gulp.watch(path.srcsass + '**/*.scss', ['sass']);
});