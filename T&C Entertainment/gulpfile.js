'use strict';

var jsInput    = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/user.js',
        'js/contact.js',
        'js/ie10-viewport-bug-workaround.js'],
    jsOutput   = 'js',
    cssInput   = [
        'css/bootstrap.min.css',
        'css/ie10-viewport-bug-workaround.css',
        'css/font-awesome.min.css',
        'css/user.css'],
    cssOutput  = 'css';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('concat-scripts', function(){
    gulp.src(jsInput)
        .pipe(concat('output.js'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('concat-css', function(){
    gulp.src(cssInput)
        .pipe(concat('output.css')) // concat into file name
        .pipe(gulp.dest(cssOutput));    // send that file to the css directory
});

gulp.task('minify-scripts', function(){
    gulp.src('js/output.js')
        .pipe(uglify())
        .pipe(rename('output.min.js'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('minify-css', function(){
    gulp.src('css/output.css')
        .pipe(cleanCSS())
        .pipe(rename('output.min.css'))
        .pipe(gulp.dest(cssOutput));
});

gulp.task('default', ['concat-scripts', 'concat-css', 'minify-scripts', 'minify-css'],function(){ // array defined dependencies, which are all run before the default task
    console.log('done');
});