var gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    notify       = require('gulp-notify'),
    less         = require('gulp-less'),
    plumber      = require('gulp-plumber'),
    path         = require('path'),
    beep         = require('beepbeep'),
    imagemin     = require('gulp-imagemin'),
    coffee       = require('gulp-coffee'),
    rjs          = require('gulp-requirejs'),
    exec         = require('child_process').exec,
    bs           = require('browser-sync').create();

var onError = function (err) {
    beep();
    console.log(err);
};

gulp.task('browser-sync', ['scripts', 'styles'], function() {
    bs.init({
        // server: {
            // baseDir: "./"
        // },
        proxy: "http://test_marionette.com/app_dev.php",
        open: false
    });
});

gulp.task('scripts', ['rjs'], function () {
    return exec('bin/console assets:install --symlink', logStdOutAndErr);
});

gulp.task('styles', ['styles-compile'], function () {
    return exec('bin/console assets:install --symlink', logStdOutAndErr);
});

gulp.task('rjs', ['coffee-compile', 'templates'], function() {
    rjs({
        baseUrl : "web/bundles/app/js",
        paths   : {
            "app" : "init"
        },
        findNestedDependencies : true,
        wrap: false,
        preserveLicenseComments: false,
        removeCombined: true,
        mainConfigFile: "web/bundles/app/js/init.js",
        include: ["app"],
        out: "web/bundles/app/js/app.js"
    });
});

gulp.task('templates', function() {
    gulp.src('web/bundles/app/coffee/templates/*.html')
   .pipe(gulp.dest('web/bundles/app/js/templates/'));
})

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

gulp.task('serve', ['styles', 'scripts', 'watch']);

gulp.task('build', ['styles', 'scripts']);

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('src/AppBundle/Resources/public/less/*.less', ['styles', bs.reload]);
    gulp.watch('src/AppBundle/Resources/public/coffee/**/*.coffee', ['scripts', bs.reload]);
    gulp.watch('src/AppBundle/Resources/public/coffee/templates/*.html', ['templates', bs.reload]);

    gulp.watch('app/Resources/views/**/*.html.twig').on('change', bs.reload);
    gulp.watch('app/Resources/translations/**/*.yml').on('change', bs.reload);
});

