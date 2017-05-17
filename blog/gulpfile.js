var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

gulp.task('sass', function(){
  return gulp.src('resources/assets/sass/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
    .pipe(cssnano({zindex: false}))
    .pipe(gulp.dest('public/css'))
    .pipe(browserSync.stream());
});

gulp.task('server', ['browserSync', 'sass'], function (){
	gulp.watch('resources/assets/sass/*.scss', ['sass']);
	gulp.watch('resources/views/*.php', browserSync.reload);
});

gulp.task('browserSync', function() {
	browserSync.init({
		// server: { baseDir: 'app' }
		proxy:'designio.dev/Laravel-Blog/blog/public/'
	})
});