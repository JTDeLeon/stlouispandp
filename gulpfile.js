'use strict';
 
const { task, src, dest, watch } = require('gulp');
// const cleanCSS = require('gulp-clean-css');
var sass = require('gulp-sass');
 
sass.compiler = require('node-sass');
 
task('sass', function(cb) {
  return src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    // .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(dest('.'));
z
})


task('watch', function(cb) {
  // body omitted
  watch('./sass/**/*.scss', task('sass'));
  cb();
});

const build = task('watch');