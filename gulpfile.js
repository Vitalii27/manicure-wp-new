'use strict';
var project = 'manicure';

const gulp = require('gulp');
const themeRoot = "wp-content/themes/" + project + "/";

function lazyRequireTask(taskName, path, options) {
  options = options || {};
  options.taskName = taskName;
  gulp.task(taskName, function(callback) {
    let task = require(path).call(this, options);

    return task(callback);
  });
}

lazyRequireTask('styles', './gulp-tasks/styles', {
  src: themeRoot + 'src/scss/*.scss',
  dst: themeRoot + 'assets/css'
});

lazyRequireTask('js', './gulp-tasks/js', {
  src: themeRoot + 'src/js/*.js',
  dst: themeRoot + 'assets/js'
});

lazyRequireTask('clean', './gulp-tasks/clean', {
  dst: themeRoot + 'assets'
});


lazyRequireTask('assets', './gulp-tasks/assets', {
  src: themeRoot + 'src/assets/**',
  dst: themeRoot + 'assets'
});

lazyRequireTask('lint', './gulp-tasks/lint', {
  cacheFilePath: process.cwd() + themeRoot + '/tmp/lintCache.json',
  src: themeRoot + 'src/**/*.js'
});

gulp.task('build', gulp.series(
    'clean',
    gulp.parallel('styles', 'js', 'assets'))
);

gulp.task('watch', function() {
  gulp.watch(themeRoot + 'src/scss/**/*.scss', gulp.series('styles'));
  gulp.watch(themeRoot + 'src/js/**/*.js', gulp.series('js'));
  gulp.watch(themeRoot + 'src/assets/**/*.*', gulp.series('assets'));
});

gulp.task('dev',
    gulp.series('build' , gulp.parallel('watch'))
);
