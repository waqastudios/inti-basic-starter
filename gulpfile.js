// Grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    bower = require('gulp-bower')
    
// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
  return gulp.src('./scss/**/*.scss')
    .pipe(plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))

    .pipe(gulp.dest('./css/'))     
    .pipe(rename({suffix: '-min'}))
    .pipe(minifycss())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/'))
});    
    
// JSHint, concat, and minify JavaScript
gulp.task('site-js', function() {
  return gulp.src([	
	  
           // Grab your custom scripts
  		  './js/scripts/*.js'
  		  
  ])
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('child.js'))
    .pipe(gulp.dest('./js'))
    .pipe(rename({suffix: '-min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
});    


// Create a default task 
gulp.task('default', function() {
  gulp.start('styles', 'site-js');
});

// Watch files for changes
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('./scss/**/*.scss', ['styles']);

  // Watch site-js files
  gulp.watch('./js/scripts/*.js', ['site-js']);

});
