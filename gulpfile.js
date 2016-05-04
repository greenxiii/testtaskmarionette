var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    less = require('gulp-less'),
    plumber = require('gulp-plumber'),
    path = require('path'),
    beep = require('beepbeep'),
    imagemin = require('gulp-imagemin'),
    coffee = require('gulp-coffee'),
    exec = require('child_process').exec,
    bs = require('browser-sync').create();

var onError = function (err) {
    beep();
    console.log(err);
};

gulp.task('browser-sync', ['coffee-compile', 'styles-compile'], function() {
    bs.init({
        // server: {
            // baseDir: "./"
        // },
        proxy: "http://test_marionette.com/app_dev.php" 
    });
});

gulp.task('scripts', ['coffee-compile'], function () {
    return exec('bin/console assets:install --symlink', logStdOutAndErr);
});

gulp.task('styles', ['styles-compile'], function () {
    return exec('bin/console assets:install --symlink', logStdOutAndErr);
});

gulp.task('styles-compile', function() {
    return gulp.src('less/global.less')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(autoprefixer('last 2 version'))
        .pipe(gulp.dest('css'))
        .pipe(notify({ message: 'Styles-compile task complete' }));
});

gulp.task('coffee-compile', function() {
    return gulp.src('coffee/**/*.coffee')
            .pipe(plumber({
                errorHandler: onError
            }))
            .pipe(coffee({bare: true}))
            .pipe(gulp.dest('js'))
            .pipe(notify({ message: 'coffee-compile task complete' }));
});

gulp.task('images', function() {
    return gulp.src('images/*.png')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('images/compiled'))
        .pipe(notify({ message: 'Image task complete' }));
});

gulp.task('serve', ['styles-compile', 'coffee-compile', 'watch']);

gulp.task('build', ['styles-compile', 'coffee-compile', 'images']);

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('less/*.less', ['styles-compile', bs.reload]);
    gulp.watch('coffee/*.coffee', ['coffee-compile']);
    gulp.watch('*.html').on('change', bs.reload);
});

