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

// Without this function exec() will not show any output
var logStdOutAndErr = function (err, stdout, stderr) {
    console.log(stdout + stderr);
};

gulp.task('styles-compile', function() {
    return gulp.src('src/AppBundle/Resources/public/less/global.less')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(less())
        .pipe(autoprefixer('last 2 version'))
        .pipe(gulp.dest('src/AppBundle/Resources/public/css'))
        .pipe(notify({ message: 'Styles-compile task complete' }));
});

gulp.task('coffee-compile', function() {
    return gulp.src('src/AppBundle/Resources/public/coffee/**/*.coffee')
            .pipe(coffee({bare: true}))
            .pipe(plumber({
                errorHandler: onError
            }))
            .pipe(gulp.dest('src/AppBundle/Resources/public/js'))
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

gulp.task('serve', ['styles', 'scripts', 'watch']);

gulp.task('build', ['styles', 'scripts', 'images']);

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('src/AppBundle/Resources/public/less/*.less', ['styles-compile']);
    gulp.watch('src/AppBundle/Resources/public/coffee/*.coffee', ['coffee-compile']);

    gulp.watch('src/AppBundle/Resources/public/css/**/*.css', ['styles-compile', bs.reload]);
    gulp.watch('src/AppBundle/Resources/public/js/**/*.js', ['bs.reload']);
    gulp.watch('app/Resources/views/**/*.html.twig').on('change', bs.reload);
});

