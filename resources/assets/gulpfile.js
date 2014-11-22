var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var minify = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');
var shell = require('gulp-shell');


var paths = {
    artisan: 'php /Users/Ryan/Documents/Web/Development/ourasmr/artisan ',
    public: '../../public/assets',
    less: './less',
    script: './js',
    php: '../../**/*.php'
};

// scripts to combine
var scripts = [
    'vendor/jquery/jquery.min.js',
    'vendor/bootstrap/bootstrap.min.js',
    'vendor/jquery/jquery.backstretch.min.js',
    'vendor/bootstrap/bootstrapValidator.min.js',
    'vendor/bootstrap/emailAddress.js',
    'vendor/bootstrap/ladda.min.js',
    //'vendor/retina/retina.min.js',
    //'vendor/bootstrap/jasny-bootstrap.min.js',
    'vendor/masonry/masonry.pkgd.min.js',
    'vendor/imagesloaded/imagesloaded.pkgd.min.js',
    'vendor/jquery/jquery.shuffle.min.js',
    'vendor/jquery/jquery.bxslider.min.js',
    'vendor/waypoints/waypoints.min.js',
    'vendor/jquery/jquery.counterup.min.js',
    'vendor/jquery/jQuery.GI.TheWall.min.js',
    'vendor/twitter/twitterFetcher.min.js',
    'vendor/jquery/jquery.simple-text-rotator.min.js',
    'vendor/jquery/jquery.throttledresize.js',
    'vendor/wow/wow.min.js',
    'vendor/jquery/jquery.knob.min.js',
    'js/main.js'
];

// set styles to combine
// compiled less file last
var styles = [
    'vendor/bootstrap/bootstrap.min.css',
    'vendor/fontawesome/font-awesome.min.css',
    'vendor/bootstrap/bootstrapValidator.min.css',
    'vendor/bootstrap/ladda-themeless.min.css',
    'vendor/bootstrap/jasny-bootstrap.min.css',
    'vendor/jquery/jquery.bxslider.css',
    'vendor/animate/animate.css',
    'css/main.css'
];


gulp.task('less', function () {
    gulp.src('./less/main.less')
        .pipe(less())
        .pipe(gulp.dest('css'));
});

gulp.task('css', ['less'], function() {
    gulp.src(styles)
        .pipe(concat('all.css'))
        .pipe(prefix())
        //.pipe(minify())
        .pipe(gulp.dest(paths.public+'/css'));
});

gulp.task('script', function() {
    gulp.src(scripts)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.public+'/js'));
});


gulp.task('watch', function() {
    gulp.watch(paths.script, ['script']);
    gulp.watch(paths.less, ['css']);
});


gulp.task('default', function() {
    gulp.start('css', 'script');
});

