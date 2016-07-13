'use strict';

var gulp = require('gulp');

gulp.task('hello', function(){
    console.log('hello');
});

gulp.task('default', ['hello'],function(){ // array defined dependencies, which are all run before the default task
    console.log('this is the default task');
});