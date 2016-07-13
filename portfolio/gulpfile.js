'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    sass = require('gulp-sass');

gulp.task('concat-scripts', function(){
    gulp.src([
            'js/vendor/jquery.js',
            'js/vendor/what-input.js',
            'js/vendor/foundation.js',
            'js/vendor/foundation.magellan.js',
            'js/app.js'])
        .pipe(concat('output.js'))
        .pipe(gulp.dest('js'));
});

gulp.task('concat-css', function(){
    gulp.src([                      // specify sources for gulp 
            'css/foundation.min.css',
            'css/style.css'])
        .pipe(concat('output.css')) // concat into file name
        .pipe(gulp.dest('css'));    // send that file to the css directory
});

gulp.task('minify-scripts', function(){
    gulp.src('js/output.js')
        .pipe(uglify())
        .pipe(rename('output.min.js'))
        .pipe(gulp.dest('js'));
});

gulp.task('minify-css', function(){
    gulp.src('css/output.css')
        .pipe(cleanCSS())
        .pipe(rename('output.min.css'))
        .pipe(gulp.dest('css'));
});

gulp.task('sass-compile',function(){
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('./css'));
});

gulp.task('default', ['sass-compile','concat-scripts', 'concat-css', 'minify-scripts', 'minify-css'],function(){ // array defined dependencies, which are all run before the default task
    console.log('done');
});