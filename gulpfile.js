var gulp = require('gulp');
var concatCss = require('gulp-concat-css');

gulp.task('default', function () {
  return gulp.src('css-dev/main.css')
    .pipe(concatCss("style.css"))
    .pipe(gulp.dest(''));
});
