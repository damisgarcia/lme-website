var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var concat_vendor = require('gulp-concat-vendor');

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});


gulp.task('vendor', function() {
  gulp.src([
    './bower_components/modernizr/modernizr.js',
    './bower_components/string/dist/string.min.js',
    './bower_components/js-url/url.min.js',
    './bower_components/jquery/dist/jquery.js',
    './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
    './bower_components/angular/angular.js',
    './bower_components/angular-animate/angular-animate.js',
    './bower_components/ngmap/build/scripts/ng-map.js',
    './bower_components/Waves/dist/waves.min.js',
    './bower_components/magnific-popup/dist/jquery.magnific-popup.js',
    './bower_components/plyr/dist/plyr.js',
    './bower_components/jquery_lazyload/jquery.lazyload.js',
    './bower_components/jquery_lazyload/jquery.scrollstop.js',
    './bower_components/animatescroll/animatescroll.js'
  ])
  .pipe(concat_vendor('vendor.js'))
  .pipe(gulp.dest('./dist/'));
});

gulp.task('scripts', function() {
  return gulp.src('./js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./dist'));
});


//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
    gulp.watch('bower_components/',['vendor']);
    gulp.watch('js/',['scripts']);
});
