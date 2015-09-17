var gulp = require('gulp');

/* SCSS --- */
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglifycss    = require('gulp-uglifycss');
var watch        = require('gulp-watch');
 
gulp.task('stream', function () {
    return gulp.src('css/**/*.css')
        .pipe(watch('css/**/*.css'))
        .pipe(gulp.dest('build'));
});

/* FOLDER SETTINGS --- */
var src = {
  styles: './styles/**/*.scss'
};
var dist = {
  styles: './styles'
};

gulp.task('styles', function () {
  gulp.src(src.styles)
    .pipe(watch(src.styles))
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['> 1%', 'last 2 versions'],
      cascade: false
    }))
    .pipe(uglifycss({
      'max-line-len' : 80
    }))
    .pipe(gulp.dest(dist.styles));
});

gulp.task('default', ['styles']);