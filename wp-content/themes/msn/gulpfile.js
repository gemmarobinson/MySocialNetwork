/*-------------------
	Variables
--------------------*/

	var gulp = require('gulp');
	var rename = require('gulp-rename');
	var sass = require('gulp-ruby-sass');
	var sourcemap = require('gulp-sourcemaps');
	var concat = require('gulp-concat');
	var uglify = require('gulp-uglify');



/*-------------------
	Styles Task
--------------------*/

	gulp.task('styles', function() {

		gulp.src( 'assets/styles/scss/*.scss')
			.pipe( sourcemap.init() )
			return sass(['assets/styles/scss/*.scss'], {
				style: 'compressed',
				sourcemap: true
			})
			.pipe(rename('core.min.css'))
			.pipe( sourcemap.write('./') )
		.pipe(gulp.dest('assets/styles/css'))

	});



/*-------------------
	Scripts Task
--------------------*/

	gulp.task('scripts', function() {

		return gulp.src('assets/js/src/custom/**/*.js')
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
		gulp.watch('assets/js/src/custom/**/*.js', gulp.parallel('scripts')); 

	});



// Set the default task ( command: gulp )
gulp.task('default', gulp.series(gulp.parallel('scripts', 'styles')));