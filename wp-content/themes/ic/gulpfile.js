'use strict';

var gulp = require('gulp'),
		sass = require('gulp-sass')

gulp.task('sass', function () {
	return gulp.src('./scss/**/*.scss')
		// .pipe(sourcemaps.init())
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(sass({ outputStyle: 'compressed' }))
		// .pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
	gulp.watch('./scss/**/*.scss', gulp.series(
		'sass'
	));
});