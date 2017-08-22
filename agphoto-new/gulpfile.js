'use strict';

var gulp = require('gulp'),
    http = require('http-server'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    sass = require('gulp-sass'),
    maps = require('gulp-sourcemaps'),
    del = require('del');

gulp.task('compile-sass',function(){
    return gulp.src('./sass/app.sass')
        .pipe(maps.init())          // create maps from scss partials
        .pipe(sass())
        .pipe(maps.write('./'))     // this path is relative to the output directory
        .pipe(gulp.dest('./css'));  // this is the output directory
});

gulp.task('concat-css',['compile-sass'], function(){
    return gulp.src(['css/app.css'])
        .pipe(concat('output.css')) // concat into file name
        .pipe(gulp.dest('css'));    // send that file to the css directory
});

gulp.task('minify-css',['concat-css'], function(){
    return gulp.src('css/output.css')
        .pipe(maps.init({loadMaps:true}))   // create maps from scss *sourcemaps* not the css
        .pipe(cleanCSS())
        .pipe(rename('output.min.css'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('css'));
});

gulp.task('concat-scripts', function(){
    return gulp.src(['js/app.js'])
        .pipe(maps.init())
        .pipe(concat('output.js'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('js'));
});

gulp.task('minify-scripts',['concat-scripts'], function(){
    return gulp.src('js/output.js')
        .pipe(maps.init({loadmaps:true}))
        .pipe(uglify())
        .pipe(rename('output.min.js'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('js'));
});

gulp.task('clean', function(){
    del(['dist','css/output*.css*','css/style.css*','js/output*.js*']);
});

gulp.task('watch', function(){
    gulp.watch('./scss/**/*.sass',['minify-css']);
    gulp.watch('./js/app.js',['minify-scripts']);
});

gulp.task('build', ['minify-scripts', 'minify-css'], function(){ // array defined dependencies, which are all run before the default task
    return gulp.src(['css/output.min.css','js/output.min.js','incl/**','*.php',], {base:'./'})
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['watch']);