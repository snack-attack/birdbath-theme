let gulp = require('gulp');
let cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename');
let sass = require('gulp-sass');
let uglify = require('gulp-uglify-es');
let autoprefix = require('gulp-autoprefixer');
let concat = require('gulp-concat');
let imagemin = require('gulp-imagemin');
let browserSync = require('browser-sync').create();

//compile sass and minify css

gulp.task("sass", () => {
    return gulp.src("./scss/styles.scss")
        .pipe(sass())
        .pipe(gulp.dest("./dist/css/"))
        .pipe(rename("styles.css"))
        .pipe(browserSync.stream());
});

gulp.task("minify-css", () => {
    return gulp.src("./dist/css/styles.css")
        .pipe(cleanCSS({compatibility: "ie8"}))
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("./dist/css/"))
        .pipe(browserSync.stream());
});
  
gulp.task('styles', gulp.series('sass', 'minify-css'));

//combine then minify js files

// gulp.task('scripts', function() {
//     return gulp.src('./*.js')
//       .pipe(concat('bundle.js'))
//       .pipe(gulp.dest('./dist/'));
//   });

// gulp.task("uglify", function () {
//     return gulp.src("lib/bundle.js")
//         .pipe(rename("bundle.min.js"))
//         .pipe(uglify(/* options */))
//         .pipe(gulp.dest("lib/"));
// });


// // watch & default tasks

// gulp.task('watch', function () {
// 	return gulp.watch('./scss/*.scss', gulp.series('styles'));
// });

// // Static Server + watching scss/html files
// gulp.task('serve', ['sass'], function() {

//     browserSync.init({
//         server: "./"
//     });

//     gulp.watch("./scss/*.scss", ['sass']);
//     gulp.watch("./*.html").on('change', browserSync.reload);
// });

// gulp.task('default', ['styles', 'serve']);
