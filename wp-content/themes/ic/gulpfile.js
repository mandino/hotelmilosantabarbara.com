'use strict';

var gulp = require('gulp'),
		sass = require('gulp-sass'),
		uglify = require('gulp-uglify'),
		concat = require('gulp-concat')

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

gulp.task('sass', function () {
	return gulp.src('./scss/**/*.scss')
		// .pipe(sourcemaps.init())
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(sass({ outputStyle: 'compressed' }))
		// .pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./css'));
});

gulp.task('js:watch', function () {
	gulp.watch('./js/**/*.scss', gulp.series(
		'concat',
		'uglify'
	));
});

gulp.task('uglify', function () {
	return gulp.src([
		'./js/main.js',
	])
	.pipe(uglify())
	.pipe(gulp.dest('./js'));
});

gulp.task('concat', function () {
	return gulp.src([
		'./js/jquery.prettyPhoto.js',
		'./js/jquery.vide.js',
		'./js/jquery-clicknav.js',
		'./js/quotes-rotator/modernizr.custom.js',
		'./js/quotes-rotator/jquery.cbpQTRotator.min.js',
		'./js/jquery.slides.min.js',
		'./js/flexslider/jquery.flexslider.js',
		'./js/jquery.lazyloadxt.extra.js',
		'./js/jquery.sticky.js',
		'./scripts/jquery.lazyload.js',
		'./js/jquery.mmenu.min.js',
		'./js/jquery.mousewheel.js',
		'./js/ticker.js',
		'./js/scripts.js',
		'./js/slick/slick.min.js',
		'./js/jquery.magnific-popup.min.js',
	])
	.pipe(concat('main.js'))
	.pipe(gulp.dest('./js'));
});