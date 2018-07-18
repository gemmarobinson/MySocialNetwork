/*-------------------
	Variables
--------------------*/

	var gulp = require('gulp');
	var rename = require('gulp-rename');
	var sass = require('gulp-ruby-sass');
	var concat = require('gulp-concat');
	var uglify = require('gulp-uglify');



/*-------------------
	Styles Task
--------------------*/

	gulp.task('styles', function() {

		gulp.src( 'assets/styles/scss/*.scss')
			return sass(['assets/styles/scss/*.scss'], {
				style: 'compressed',
			})
			.pipe(rename('core.min.css'))
		.pipe(gulp.dest('assets/styles/css'))

	});



/*-------------------
	Scripts Task
--------------------*/

	gulp.task('scripts', function() {

		return gulp.src('assets/js/src/**/*.js')
			.pipe(concat('core.js'))
			.pipe(gulp.dest('assets/js/'))
			.pipe(rename('core.min.js'))
			.pipe(uglify())
		.pipe(gulp.dest('assets/js/dist'));

	});



/*-------------------
	Watch Task
--------------------*/

	gulp.task('watch', function() {

		gulp.watch('assets/styles/scss/**/*.scss', gulp.parallel('styles'));
		gulp.watch('assets/js/src/**/*.js', gulp.parallel('scripts')); 

	});



// Set the default task ( command: gulp )
gulp.task('default', gulp.series(gulp.parallel('scripts', 'styles')));