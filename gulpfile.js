var gulp = require('gulp'),
    concatCss = require('gulp-concat-css');

gulp.task('concat', function () {
  return gulp.src('assets/css/main.css')
    .pipe(concatCss("style.css"))
    .pipe(gulp.dest(''));
});

gulp.task('watch', function() {
  gulp.watch('assets/**/*.css', ['concat']);
});

gulp.task('default', ['watch', 'concat']);
