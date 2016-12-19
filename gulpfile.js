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
  gulp.src('./bower_components/**/*.js')
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
