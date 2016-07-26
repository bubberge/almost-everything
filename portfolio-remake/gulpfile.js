/* jshint laxcomma: true */

var gulp = require('gulp')
  , $    = require('gulp-load-plugins')()
  , maps = require('gulp-sourcemaps')
  , concat = require('gulp-concat')
  , uglify = require('gulp-uglify')
  , rename = require('gulp-rename')
  , del = require('del');

var sassPaths = [
    'bower_components/foundation-sites/scss',
    'bower_components/motion-ui/src'
    ]
  , jsPaths = [
    'bower_components/jquery/dist/jquery.js',
    'bower_components/what-input/what-input.js',
    'bower_components/foundation-sites/dist/foundation.js',
    'js/app.js',
    'js/scrollFill.js'
  ];

gulp.task('concat-scripts', function(){
    return gulp.src( jsPaths )
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

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe(maps.init({loadmaps:true}))
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
        browsers: ['last 2 version', 'safari 5', 'ie >= 9', 'opera 12.1', 'ios 6', 'android 4']
    }))
    .pipe(maps.write('./')) 
    .pipe(gulp.dest('css'));
});

gulp.task('clean', function(){
  del(['dist','css/app*.css*','js/output*.js*']);
});

gulp.task('build', ['minify-scripts', 'sass'], function(){ // array defined dependencies, which are all run before the default task
    return gulp.src(['css/app.css','js/output.min.js','incl/**','*.php','img/**'], {base:'./'})
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['sass','minify-scripts'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});
