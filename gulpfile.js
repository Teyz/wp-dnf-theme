const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const groupmq = require('gulp-group-css-media-queries');
const bs = require('browser-sync');
const minify = require('gulp-minify');
const cleanCss = require('gulp-clean-css');
const concat = require('gulp-concat');

const SASS_SOURCES = [
  'assets/**/*.scss', // All other Sass files in the /css directory
];

/**
 * Compile Sass files
 */
gulp.task('compile:sass', gulp.parallel(() =>
  gulp.src(SASS_SOURCES, { base: './' })
    .pipe(plumber()) // Prevent termination on error
    .pipe(sass({
      indentType: 'tab',
      indentWidth: 1,
      outputStyle: 'expanded', // Expanded so that our CSS is readable
    })).on('error', sass.logError)
    .pipe(groupmq()) // Group media queries!
    .pipe(gulp.dest('.')) // Output compiled files in the same dir as Sass sources
    .pipe(bs.stream()))); // Stream to browserSync


gulp.task('watch', function(){
    gulp.watch('assets/scss/**/*.scss', gulp.parallel('compile:sass'));
    gulp.watch('assets/js/index.js', gulp.parallel('pack-js'));
});


gulp.task('pack-js', gulp.parallel(() =>
  gulp.src(['assets/js/index.js'])
      .pipe(concat('bundle.js'))
      .pipe(minify({
          ext:{
              min:'.js'
          },
          noSource: true
      }))
      .pipe(gulp.dest('assets/js/vendor'))
));

/**
 * Default task executed by running `gulp`
 */
gulp.task('default', gulp.parallel(['watch']));